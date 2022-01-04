<?php

namespace Huangtingbb\DyApi\Exceptions;

use Throwable;

class InvalidUrlException extends \Exception
{

    public function __construct($message = "", $code = 2001, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}