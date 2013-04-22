<?php

namespace Brightmarch\RestEasy\Exception;

class HttpException extends \Exception
{

    /** @var string */
    public $exceptionMessage = ''; 

    /** @var integer */
    public $httpCode = 0;

    /** @var array */
    public $violations = [];

    public function __construct($message='', $code=0, array $violations=[])
    {
        parent::__construct($message, (int)$code);

        $this->exceptionMessage = $message;
        $this->httpCode = (int)$code;
        $this->violations = $violations;
    }

    public function getViolations()
    {
        return $this->violations;
    }

}
