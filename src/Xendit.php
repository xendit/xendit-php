<?php

/**
 * Xendit.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

/**
 * Class Xendit
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Xendit
{
    public static $apiKey;

    public static $apiBase = 'https://api.xendit.co';

    public static $libVersion;

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

    /**
     * Get library version
     *
     * @return mixed
     */
    public static function getLibVersion()
    {
        if (self::$libVersion !== null) {
            $content = file_get_contents('composer.json');
            $content = json_decode($content, true);
            self::$libVersion = $content['version'];
        }

        return self::$libVersion;
    }
}