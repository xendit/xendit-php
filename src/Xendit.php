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

    /**
     * Get the value of apiKey
     * 
     * @return string Secret API key
     */ 
    public function getApiKey()
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
    public function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}