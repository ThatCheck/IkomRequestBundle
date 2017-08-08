<?php

// src Ikom/RequestBundle/Specifications/SpecStatusNotOk.php

namespace Ikom\RequestBundle\Specifications;

class StatusNotOkSpecification extends Specification
{
    public function isSatisfiedBy($object)
    {
        return $object >= 300;
    }
}