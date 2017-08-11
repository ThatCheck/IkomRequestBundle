<?php

// src Ikom/RequestBundle/Request/GuzzleRequest.php

namespace Ikom\RequestBundle\Request;

use Ikom\RequestBundle\Exceptions\ServiceNotAvailableException;
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
    private $idRequest;
    private $originRequest;
    private $client;
    private $headers;

    public function __construct(INormalizer $normalizer, RequestStack $requestStack)
    {
        $this->normalizer = $normalizer;
        $this->request = $requestStack->getMasterRequest();
        $this->client = new GuzzleHttp\Client();
        $this->idRequest = $this->request->headers->get('ikom-request-id');
        $this->originRequest = $this->request->headers->get('ikom-request-origin');
        $this->headers = ['accept' => 'application/ld+json',
            'ikom-request-id' => $this->idRequest,
            'ikom-request-origin' => $this->originRequest,
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
     * @return array
     */
    public function getDecodedBody()
    {
        return $this->decode($this->guzzleRequest->getBody());
    }

    /**
     * @param $method
     * @param $uri
     * @param string $loadData
     * @return IkomRequest
     */
    public function makeRequest($method, $uri, $loadData = '')
    {
        $res = $this->makeGuzzleRequest($method, $uri, $loadData);

        $specification = new StatusNotOkSpecification();
        if ($specification->isSatisfiedBy($res->getStatusCode())) {
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
    public function makeGuzzleRequest($method, $uri, $loadData = '')
    {
        return $this->client->request($method, $uri, ['headers' => $this->headers, 'body' => $loadData]);
    }

    /**
     * @param $buff
     * @return array
     */
    public function decode($buff)
    {
        return $this->normalizer->decode($buff);
    }

    /**
     * @param $buff
     * @return string
     */
    public function encode($buff)
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
        $res = $this->client->get($uri, ['headers' => $this->headers]);

        $specification = new StatusNotOkSpecification();
        if ($specification->isSatisfiedBy($res->getStatusCode())) {
            throw new ServiceNotAvailableException($res->getStatusCode());
        }

        $this->guzzleRequest = $res;
        return $this;
    }

    /**
     * @param $uri
     * @param $loadData
     * @return IkomRequest
     */
    public function post($uri, $loadData)
    {
        $this->addHeader('Content-Type', 'application/ld+json');
        $res = $this->client->post($uri, ['headers' => $this->headers, 'body' => $loadData]);

        $specification = new StatusNotOkSpecification();
        if ($specification->isSatisfiedBy($res->getStatusCode())) {
            throw new ServiceNotAvailableException($res->getStatusCode());
        }

        $this->guzzleRequest = $res;
        return $this;
    }

    /**
     * @param $uri
     * @return IkomRequest
     */
    public function delete($uri)
    {
        $res = $this->client->delete($uri, ['headers' => $this->headers]);

        $specification = new StatusNotOkSpecification();
        if ($specification->isSatisfiedBy($res->getStatusCode())) {
            throw new ServiceNotAvailableException($res->getStatusCode());
        }

        $this->guzzleRequest = $res;
        return $this;
    }

    /**
     * @param $uri
     * @return IkomRequest
     */
    public function put($uri)
    {
        $res = $this->client->put($uri, ['headers' => $this->headers]);

        $specification = new StatusNotOkSpecification();
        if ($specification->isSatisfiedBy($res->getStatusCode())) {
            throw new ServiceNotAvailableException($res->getStatusCode());
        }

        $this->guzzleRequest = $res;
        return $this;
    }
}