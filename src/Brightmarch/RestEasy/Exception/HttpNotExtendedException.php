<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotExtendedException extends HttpException 
{

    public function __construct($message, array $violations=[])
    {
        parent::__construct($message, 510, $violations);
    }

}
