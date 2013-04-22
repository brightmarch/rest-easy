<?php

namespace Brightmarch\RestEasy\Exception;

class HttpUnauthorizedException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 401, $violations);
    }

}
