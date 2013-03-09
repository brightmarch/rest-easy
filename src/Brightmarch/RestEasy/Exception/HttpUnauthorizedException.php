<?php

namespace Brightmarch\RestEasy\Exception;

class HttpUnauthorizedException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 401);
    }

}
