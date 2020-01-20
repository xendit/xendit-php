<?php

namespace Xendit\ApiOperations;

/**
 * Trait RetrieveAll
 *
 * @package Xendit\ApiOperations
 */
trait RetrieveAll
{
    /**
     * Send request to get all object, e.g Invoice
     *
     * @param array $options user's options
     *
     * @return array
     */
    public static function retrieveAll($options = [])
    {
        $url = static::classUrl();
        return static::_request('GET', $url, [], $options);
    }
}