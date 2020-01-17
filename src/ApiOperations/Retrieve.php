<?php

namespace Xendit\ApiOperations;

trait Retrieve
{
    /**
     * @param string $url
     * @param int|null $id
     * @param array $options
     *
     * @return array
     */
    public static function retrieve($id, $options = [])
    {
        $url = static::classUrl() . '/' . $id;
        return static::_request('GET', $url, [], $options);
    }
}