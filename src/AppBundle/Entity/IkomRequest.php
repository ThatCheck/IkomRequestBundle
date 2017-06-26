<?php

// src AppBundle/Entity/GuzzleRequest.php

namespace AppBundle\Entity;

class GuzzleRequest implements IRequest
{
    private $normalizer;

    public function __construct(INormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function request($method, $uri, $load_data)
    {

    }

    public function guzzleRequest($method, $uri, $load_data)
    {

    }

    public function decode($buff)
    {

    }

    public function get($uri)
    {

    }

    public function post($uri, $load_data)
    {

    }

    public function delete($uri)
    {

    }

    public function put($uri)
    {

    }
}