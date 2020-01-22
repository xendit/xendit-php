<?php

/**
 * Update.php
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
 * Trait Update
 *
 * @category Trait
 * @package  Xendit\ApiOperations
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
trait Update
{
    /**
     * Send an update request
     *
     * @param array $id      data ID
     * @param array $params  user's params
     * @param array $options user's options
     *
     * @return array
     */
    public static function update($id, $params = [], $options = [])
    {
        self::validateParams($params, static::updateReqParams());

        $url = static::classUrl() . '/' . $id;

        return static::_request('PATCH', $url, $params, $options);
    }
}
