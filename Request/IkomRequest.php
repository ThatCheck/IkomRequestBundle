<?php

// src Ikom/RequestBundle/Request/GuzzleRequest.php

namespace Ikom\RequestBundle\Request;

use Ikom\RequestBundle\Exceptions\BadRequestOptionsException;
use Ikom\RequestBundle\Exceptions\ServiceNotAvailableException;
use Ikom\RequestBundle\Specifications\RequestNeedPayloadSpecification;
use Ikom\RequestBundle\Specifications\StatusNotOkSpecification;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp;
use Ikom\RequestBundle\Normalizer\INormalizer;
use Symfony\Component\HttpFoundation\RequestStack;

class IkomRequest implements IRequest
{
    /**
     * @var INormalizer
     */
    private $normalizer;
    /**
     * @var ResponseInterface
     */
    private $guzzleRequest;
    /**
     * @var null|\Symfony\Component\HttpFoundation\Request
     */
    private $request;
    private $client;
    private $headers;
    private $body;

    public function __construct(INormalizer $normalizer, RequestStack $requestStack)
    {
        $this->normalizer = $normalizer;
        $this->request = $requestStack->getMasterRequest();
        $this->client = new GuzzleHttp\Client();
        $this->initHeaders();
    }

    /**
     * @param string $host
     * @param string $path Should not start with a /
     * @param int $port
     * @param bool $useSymfonyURI
     * @return string
     */
    public function generateURL(string $host, string $path, int $port = 80, bool $useSymfonyURI = true ) : string
    {
        $path = ($useSymfonyURI === true && getenv('SYMFONY_ENV') === 'dev' ? '/app_dev.php/' : '/') . $path;
        return "http://$host:$port$path";
    }

    private function initHeaders()
    {
        $this->headers = ['accept' => 'application/ld+json'];
        if (isset($this->request->headers)) {
            $this->addHeader('Ikom-Request-ID', $this->request->headers->get('Ikom-Request-ID'));
            $this->addHeader('Ikom-Request-Origin', $this->request->headers->get('Ikom-Request-Origin'));
            $this->addHeader('Authorization', $this->request->headers->get('Authorization'));
        }
    }

    /**
     * @return ResponseInterface
     */
    public function getGuzzleRequest()
    {
        return $this->guzzleRequest;
    }

    /**
     * @return string
     */
    public function getBodyContents()
    {
        return $this->getBody()->getContents();
    }

    /**
     * @return array
     */
    public function getDecodedBodyContents()
    {
        return $this->decode($this->getBody()->getContents());
    }

    /**
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getBody()
    {
        return $this->guzzleRequest->getBody();
    }

    /**
     * @param $method
     * @param $uri
     * @param array $loadData
     * @return IkomRequest
     * @throws ServiceNotAvailableException
     */
    public function makeRequest($method, $uri, array $loadData = array())
    {
        $requestNeedPayloadSpecification = new RequestNeedPayloadSpecification();
        if ($requestNeedPayloadSpecification->isSatisfiedBy($method)) {
            $this->addHeader('content-type', 'application/ld+json');
        }

        $this->guzzleRequest = $this->makeGuzzleRequest($method, $uri, $this->prepareOptions($method, $loadData));

        $statusNotOkSspecification = new StatusNotOkSpecification();
        if ($statusNotOkSspecification->isSatisfiedBy($this->guzzleRequest->getStatusCode())) {
            throw new ServiceNotAvailableException($this->guzzleRequest->getStatusCode());
        }
        return $this;
    }

    /**
     * @param $method
     * @param $uri
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function makeGuzzleRequest($method, $uri, $options)
    {
        return $this->client->request($method, $uri, $options);
    }

    /**
     * @param $loadData
     * @return mixed
     */
    public function prepareOptions(string $method, array $loadData)
    {
        $options = [
            'headers' => $this->headers,
            'http_errors' => false
        ];
        $options['headers'] = $this->headers;
        if(in_array($method, ['POST', 'PUT']) === true ) {
            $options['form_params'] = $loadData;
        }else if(count($loadData) > 0){
            $options['body'] = $loadData;
        }

        return $options;
    }

    /**
     * @param $buff
     * @return array
     */
    private function decode($buff)
    {
        return $this->normalizer->decode($buff);
    }

    /**
     * @param $buff
     * @return string
     */
    private function encode($buff)
    {
        return $this->normalizer->encode($buff);
    }

    /**
     * @param $key
     * @param $value
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /**
     * @param $uri
     * @return IkomRequest
     */
    public function get($uri)
    {
        return $this->makeRequest('GET', $uri);
    }

    /**
     * @param $uri
     * @param $loadData
     * @return IkomRequest
     */
    public function post($uri, $loadData = [])
    {
        return $this->makeRequest('POST', $uri, $loadData);
    }

    /**
     * @param $uri
     * @return IkomRequest
     */
    public function delete($uri)
    {
        return $this->makeRequest('DELETE', $uri);
    }

    /**
     * @param $uri
     * @param array $loadData
     * @return IkomRequest
     */
    public function put($uri, $loadData = [])
    {
        return $this->makeRequest('PUT', $uri, $loadData);
    }
}