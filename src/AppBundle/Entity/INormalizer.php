<?php

// src AppBundle/Entity/INormalizer.php

namespace AppBundle\Entity;

interface INormalizer
{
    public function encode($buff);

    public function decode($buff);
}