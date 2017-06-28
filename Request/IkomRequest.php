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
        // TODO: $this->idRequest = $request->get();
        $this->idRequest = '';
        // TODO: $this->originRequest = $request->get();
        $this->originRequest = '';
        $this->headers = ['accept' => 'application/ld+json',
            'ikom-request-id' => $this->idRequest,
            'ikom-request-origin' => $this->originRequest
        ];
    }

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

    public function getBody()
    {
        return $this->decode($this->guzzleRequest->getBody());
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

    public function decode($buff)
    {
        return $this->normalizer->decode($buff);
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
     * @return ResponseInterface
     */
    public function post($uri, $loadData)
    {
        return $this->client->post($uri, ['headers' => $this->headers, 'body' => $loadData]);
    }

    /**
     * @param $uri
     * @return ResponseInterface
     */
    public function delete($uri)
    {
        return $this->client->delete($uri, ['headers' => $this->headers]);
    }

    /**
     * @param $uri
     * @return ResponseInterface
     */
    public function put($uri)
    {
        return $this->client->put($uri, ['headers' => $this->headers]);
    }
}