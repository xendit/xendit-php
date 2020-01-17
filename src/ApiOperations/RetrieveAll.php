<?php

namespace Xendit\ApiOperations;

trait RetrieveAll
{
    /**
     * @param array $options
     *
     * @return array
     */
    public static function retrieveAll($options = [])
    {
        $url = static::classUrl();
        return static::_request('GET', $url, [], $options);
    }
}