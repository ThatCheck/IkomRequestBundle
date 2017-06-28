<?php

// src Ikom/RequestBundle/Specifications/SpecificationInterface.php

namespace Ikom\RequestBundle\Specifications;

interface SpecificationInterface
{
    public function isSatisfiedBy($object);
}