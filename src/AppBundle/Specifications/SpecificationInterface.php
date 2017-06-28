<?php

// src AppBundle/Specifications/SpecificationInterface.php

namespace AppBundle\Specifications;

interface SpecificationInterface
{
    public function isSatisfiedBy($object);
}