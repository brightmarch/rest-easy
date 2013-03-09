<?php

namespace Brightmarch\RestEasy\Exception;

class HttpMethodNotAllowedException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 405);
    }

}
