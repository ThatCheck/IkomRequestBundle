<?php

// src Ikom/RequestBundle/Normalizer/INormalizer.php

namespace Ikom\RequestBundle\Normalizer;

interface INormalizer
{
    public function encode($buff);

    public function decode($buff);
}