<?php

/**
 * Create.php
 * php version 7.2.0
 *
 * @category Trait
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit\ApiOperations;

/**
 * Trait Create
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
trait Create
{
    /**
     * Send a create request
     *
     * @param array $params user's params
     *
     * @return array
     */
    public static function create($params = [])
    {
        self::validateParams($params, static::createReqParams());

        $url = static::classUrl();

        return static::_request('POST', $url, $params);
    }
}
