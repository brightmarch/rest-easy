<?php

namespace Brightmarch\RestEasy\Exception;

class HttpConflictException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 409);
    }

}
