<?php

namespace Brightmarch\RestEasy\Exception;

class HttpMethodNotAllowedException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 405, $violations);
    }

}
