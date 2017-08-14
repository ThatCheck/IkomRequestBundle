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

    private function initHeaders()
    {
        $this->headers = ['accept' => 'application/ld+json',
            'ikom-request-id' => $this->request->headers->get('ikom-request-id'),
            'ikom-request-origin' => $this->request->headers->get('ikom-request-origin'),
            'Authorization' => $this->request->headers->get('Authorization')
        ];
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
     * @param string $loadData
     * @return IkomRequest
     */
    public function makeRequest($method, $uri, $options = [])
    {
        $res = $this->makeGuzzleRequest($method, $uri, $options);

        $requestNeedPayloadSpecification = new RequestNeedPayloadSpecification();
        if ($requestNeedPayloadSpecification->isSatisfiedBy($method)) {
            $this->addHeader('Content', 'application/ld+json');
        }

        $statusNotOkSspecification = new StatusNotOkSpecification();
        if ($statusNotOkSspecification->isSatisfiedBy($res->getStatusCode())) {
            throw new ServiceNotAvailableException($res->getStatusCode());
        }

        $this->guzzleRequest = $res;
        return $this;
    }

    /**
     * @param $method
     * @param $uri
     * @param string $loadData
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function makeGuzzleRequest($method, $uri, $options = [])
    {
        if (!isset($options['headers']) && !empty($options['headers'])) {
            throw new BadRequestOptionsException('500');
        }

        $options['headers'] = $this->headers;

        return $this->client->request($method, $uri, $options);
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
    public function post($uri, $loadData)
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
     * @return IkomRequest
     */
    public function put($uri, $loadData)
    {
        return $this->makeRequest('PUT', $uri, $loadData);
    }
}