<?php 

namespace Qonsillium\Exceptions;

use Exception;

class ConfigSettingDoesntExists extends Exception
{
    public function __construct(string $message, int $code = 0, Exception $previousException = null)
    {
        parent::__construct($message, $code, $previousException);
    }
}
