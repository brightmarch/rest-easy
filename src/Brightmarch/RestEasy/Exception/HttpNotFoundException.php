<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotFoundException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 404);
    }

}
