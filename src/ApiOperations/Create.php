<?php

namespace Xendit\ApiOperations;

/**
 * Trait Create
 *
 * @package Xendit\ApiOperations
 */
trait Create
{
    /**
     * Send a create request
     *
     * @param array $params  user's params
     * @param array $options user's options
     *
     * @return array
     */
    public static function create($params = [], $options = [])
    {
        self::validateParams($params, static::createReqParams());

        $url = static::classUrl();

        return static::_request('POST', $url, $params, $options);
    }
}
