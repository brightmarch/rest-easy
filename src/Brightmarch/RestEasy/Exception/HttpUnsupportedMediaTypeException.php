<?php

namespace Brightmarch\RestEasy\Exception;

class HttpUnsupportedMediaTypeException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 415);
    }

}
