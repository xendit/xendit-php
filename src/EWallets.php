<?php

/**
 * EWallets.php
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
 * Class EWallets
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class EWallets
{
    use ApiOperations\Request;
    use ApiOperations\Retrieve;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/ewallets";
    }

    /**
     * Send a create request
     *
     * @param array $params  user's parameters
     * @param array $options headers
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function create($params = [], $options = [])
    {
        if ($params['ewallet_type'] === 'OVO') {
            $requiredParams = ['external_id', 'amount', 'phone'];
        } elseif ($params['ewallet_type'] === 'DANA') {
            $requiredParams = ['external_id', 'amount',
                'callback_url', 'redirect_url'];
        } elseif ($params['ewallet_type'] === 'LINKAJA') {
            $requiredParams = ['external_id', 'amount', 'phone'];
        }

        self::validateParams($params, $requiredParams);

        $url = static::classUrl();

        return static::_request('POST', $url, $params, $options);
    }

    /**
     * Expire Invoice
     *
     * @param string $id      Invoice ID
     * @param array  $options User's options
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function expireInvoice($id, $options = [])
    {
        $url =  '/invoices/' . $id . '/expire!';

        return static::_request('POST', $url, $options);
    }
}
