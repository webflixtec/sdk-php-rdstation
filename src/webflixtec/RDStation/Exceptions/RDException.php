<?php

namespace webflixtec\RDStation\Exceptions;

use Exception;

class RDException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
