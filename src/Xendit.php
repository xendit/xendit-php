<?php

namespace Xendit;

/**
 * Class Xendit
 *
 * @package Xendit
 */
class Xendit
{
    public static $apiKey;

    public static $apiBase = 'https://api.xendit.co';

    public static $libVersion = '2.0.0';

    /**
     * ApiBase getter
     *
     * @return string
     */
    public static function getApiBase(): string
    {
        return self::$apiBase;
    }

    /**
     * ApiBase setter
     *
     * @param string $apiBase api base url
     *
     * @return void
     */
    public static function setApiBase(string $apiBase): void
    {
        self::$apiBase = $apiBase;
    }

    /**
     * Get the value of apiKey
     * 
     * @return string Secret API key
     */ 
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Set the value of apiKey
     *
     * @param string $apiKey Secret API key
     *
     * @return void
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}
