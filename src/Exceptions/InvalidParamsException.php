<?php

namespace Huangtingbb\DyApi\Exceptions;

use Throwable;

class InvalidParamsException extends \Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("invalid params " .$message, $code, $previous);
    }
}