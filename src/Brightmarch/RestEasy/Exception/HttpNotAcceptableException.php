<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotAcceptableException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 406, $violations);
    }

}
