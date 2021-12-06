<?php

/**
 * RetrieveAll.php
 * php version 7.2.0
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit\ApiOperations;

/**
 * Trait RetrieveAll
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
trait RetrieveAll
{
    /**
     * Send request to get all object, e.g Invoice
     *
     * @return array
     */
    public static function retrieveAll($params = [])
    {
        $url = static::classUrl();
        return static::_request('GET', $url, $params);
    }
}
