<?php

// src AppBundle/Normalizer/INormalizer.php

namespace AppBundle\Normalizer;

interface INormalizer
{
    public function encode($buff);

    public function decode($buff);
}