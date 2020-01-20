<?php

namespace Xendit\ApiOperations;

/**
 * Trait Retrieve
 *
 * @package Xendit\ApiOperations
 */
trait Retrieve
{
    /**
     * Send GET request to retrieve data
     *
     * @param int|null $id      ID
     * @param array    $options user's options
     *
     * @return array
     */
    public static function retrieve($id, $options = [])
    {
        $url = static::classUrl() . '/' . $id;
        return static::_request('GET', $url, [], $options);
    }
}
