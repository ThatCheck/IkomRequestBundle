<?php

// src AppBundle/Specifications/SpecStatusNotOk.php

namespace AppBundle\Specifications;

class StatusNotOkSpecification extends Specification
{
    public function isSatisfiedBy($object)
    {
        return $object != 200;
    }
}