<?php

// src Ikom/RequestBundle/Normalizer/JSONNormalizer.php

namespace Ikom\RequestBundle\Normalizer;

class JSONNormalizer implements INormalizer
{
    public function encode($buff)
    {
        if (is_array($buff)) {
            return json_encode($buff);
        }

        return '';
    }

    public function decode($buff)
    {
        if (is_string($buff)) {
            return json_decode($buff, true);
        }

        return array();
    }
}