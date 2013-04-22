<?php

namespace Brightmarch\RestEasy\Exception;

class HttpPreconditionFailedException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 412, $violations);
    }

}
