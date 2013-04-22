<?php

namespace Brightmarch\RestEasy\Exception;

class HttpConflictException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 409, $violations);
    }

}
