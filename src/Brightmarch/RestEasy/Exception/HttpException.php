<?php

namespace Brightmarch\RestEasy\Exception;

class HttpException extends \Exception
{

    /** @var string */
    public $exceptionMessage = ''; 

    /** @var integer */
    public $httpCode = 0;

    public function __construct($message='', $code=0)
    {
        parent::__construct($message, (int)$code);

        $this->exceptionMessage = $message;
        $this->httpCode = (int)$code;
    }

}
