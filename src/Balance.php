<?php

/**
 * Balance.php
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
 * Class Balance
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Balance
{
    use ApiOperations\Request;

    /**
     * Send GET request to retrieve data
     *
     * @param string $account_type account type (CASH|HOLDING|TAX)
     * @param array  $headers      user's headers
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function getBalance($account_type = null, $headers = [])
    {
        $url = '/balance?account_type=' . $account_type;
        return static::_request('GET', $url, [], $headers);
    }
}
