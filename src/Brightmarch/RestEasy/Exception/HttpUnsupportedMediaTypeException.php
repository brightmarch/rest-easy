<?php

namespace Brightmarch\RestEasy\Exception;

class HttpUnsupportedMediaTypeException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 415, $violations);
    }

}
