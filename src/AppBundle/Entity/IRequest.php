<?php

// src AppBundle/Entity/IRequest.php

namespace AppBundle\Entity;

interface IRequest
{
    public function request($method, $uri, $load_data);

    public function guzzleRequest($method, $uri, $load_data);

    public function decode($buff);

    public function get($uri);

    public function post($uri, $load_data);

    public function delete($uri);

    public function put($uri);
}