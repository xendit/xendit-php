<?php

/**
 * ApiException.php
 * php version 7.2.0
 *
 * @category Exception
 * @package  Xendit\Exceptions
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit\Exceptions;

/**
 * Class ApiException
 *
 * @category Exception
 * @package  Xendit\Exceptions
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class ApiException extends \Exception implements ExceptionInterface
{
    protected $errorCode;

    public function getErrorCode() 
    {
        return $this->errorCode;
    }

    public function __construct($message, $code, $errorCode)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $code);
        $this->errorCode = $errorCode;
    }
}
