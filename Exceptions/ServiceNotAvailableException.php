<?php

// src Ikom/RequestBundle/Exceptions/ServiceNotAvailableException.php

namespace Ikom\RequestBundle\Exceptions;

use Symfony\Component\Config\Definition\Exception\Exception;
use Throwable;

class ServiceNotAvailableException extends Exception
{
    /**
     * @var int
     */
    private $statusCode;

    function __construct($statusCode, $code = 0, Throwable $previous = null)
    {
        $this->statusCode = $statusCode;
        $message = "Service Not Available : Code " . $this->statusCode;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}