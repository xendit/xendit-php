<?php

namespace Xendit\ApiOperations;

trait Create
{
    /**
     * @param $url
     * @param array $params
     * @param array $options
     *
     * @return array
     */
    public static function create($params = [], $options = [])
    {
        self::validateParams($params);

        $url = static::classUrl();

        return static::_request('POST', $url, $params, $options);
    }
}