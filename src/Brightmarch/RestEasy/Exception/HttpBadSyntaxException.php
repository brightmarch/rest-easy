<?php

namespace Brightmarch\RestEasy\Exception;

class HttpBadSyntaxException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 400);
    }

}
