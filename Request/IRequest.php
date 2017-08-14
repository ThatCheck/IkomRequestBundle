<?php

// src Ikom/RequestBundle/Request/IRequest.php

namespace Ikom\RequestBundle\Request;

interface IRequest
{
    public function makeRequest($method, $uri, $load_data);

    public function makeGuzzleRequest($method, $uri, $payLoad);

    public function getBody();

    public function get($uri);

    public function post($uri, $load_data);

    public function delete($uri);

    public function put($uri, $loadData);
}