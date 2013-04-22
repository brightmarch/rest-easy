<?php

namespace Brightmarch\RestEasy\Exception;

class HttpBadSyntaxException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 400, $violations);
    }

}
