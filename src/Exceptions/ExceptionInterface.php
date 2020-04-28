<?php

/**
 * ExceptionInterface.php
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
 * Interface ExceptionInterface
 *
 * @category Interface
 * @package  Xendit\Exception
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
interface ExceptionInterface extends \Throwable
{
    /**
     * Get error code for the exception instance
     * 
     * @return string
     */
    public function getErrorCode();
}
