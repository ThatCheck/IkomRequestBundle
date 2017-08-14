<?php

// src Ikom/RequestBundle/Exceptions/BadRequestOptionsException.php

namespace Ikom\RequestBundle\Exceptions;

use Throwable;

class BadRequestOptionsException extends \Exception
{
    /**
     * @var int
     */
    private $statusCode;

    function __construct($statusCode, $code = 0, Throwable $previous = null)
    {
        $this->statusCode = $statusCode;
        $message = "Bad request options : Code " . $this->statusCode;

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