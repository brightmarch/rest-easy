<?php

namespace Brightmarch\RestEasy\Exception;

class HttpNotExtendedException extends HttpException 
{

    public function __construct($message)
    {
        parent::__construct($message, 510);
    }

}
