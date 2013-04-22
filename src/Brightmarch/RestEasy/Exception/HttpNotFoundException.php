<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotFoundException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 404, $violations);
    }

}
