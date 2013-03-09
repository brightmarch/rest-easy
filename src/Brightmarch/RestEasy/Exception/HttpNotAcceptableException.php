<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotAcceptableException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 406);
    }

}
