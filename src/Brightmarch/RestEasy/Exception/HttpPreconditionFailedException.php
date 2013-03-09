<?php

namespace Brightmarch\RestEasy\Exception;

class HttpPreconditionFailedException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 412);
    }

}
