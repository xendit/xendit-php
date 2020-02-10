<?php

/**
 * Retrieve.php
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
 * Trait Retrieve
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
trait Retrieve
{
    /**
     * Send GET request to retrieve data
     *
     * @param int|null $id ID
     *
     * @return array
     */
    public static function retrieve($id)
    {
        $url = static::classUrl() . '/' . $id;
        return static::_request('GET', $url, []);
    }
}
