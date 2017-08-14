<?php

// src Ikom/RequestBundle/Specifications/RequestNeedPayloadSpecification.php

namespace Ikom\RequestBundle\Specifications;

class RequestNeedPayloadSpecification extends Specification
{
    public function isSatisfiedBy($object)
    {
        return $object === 'POST' || $object === 'PUT';
    }
}