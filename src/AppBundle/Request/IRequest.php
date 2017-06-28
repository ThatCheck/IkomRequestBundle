<?php

// src AppBundle/Request/IRequest.php

namespace AppBundle\Request;

interface IRequest
{
    public function makeRequest($method, $uri, $load_data);

    public function makeGuzzleRequest($method, $uri, $load_data);

    public function getBody();

    public function decode($buff);

    public function get($uri);

    public function post($uri, $load_data);

    public function delete($uri);

    public function put($uri);
}