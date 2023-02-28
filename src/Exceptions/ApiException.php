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

    /**
     * Get error code for the exception instance
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * Create new instance of ApiException
     *
     * @param string $message corresponds to message field in Xendit's HTTP error
     * @param string $code corresponds to http status in Xendit's HTTP response
     * @param string $errorCode corresponds to error_code field in Xendit's HTTP
     *                          error
     * @throws \Xendit\Exceptions\ApiException
     */
    public function __construct(string $message, string $code, string $errorCode)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $code);
        $this->errorCode = $errorCode;
    }
}
