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

use Xendit\Exceptions\InvalidArgumentException;

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
     * @param array $params user's parameters
     *
     * @return array please check for responses for each e-wallet type
     * https://xendit.github.io/apireference/?bash#create-payment
     * @throws Exceptions\ApiException
     */
    public static function create($params = [])
    {
        $requiredParams = [];

        if (!array_key_exists('ewallet_type', $params)) {
            $message = 'Please specify ewallet_type inside your parameters.';
            throw new InvalidArgumentException($message);
        }

        if ($params['ewallet_type'] === 'OVO') {
            $requiredParams = ['external_id', 'amount', 'phone'];
        } elseif ($params['ewallet_type'] === 'DANA') {
            $requiredParams = ['external_id', 'amount',
                'callback_url', 'redirect_url'];
        } elseif ($params['ewallet_type'] === 'LINKAJA') {
            $requiredParams = ['external_id', 'amount', 'phone',
                'items', 'callback_url', 'redirect_url'];
        }

        self::validateParams($params, $requiredParams);

        $url = static::classUrl();

        return static::_request('POST', $url, $params);
    }

    /**
     * Get Payment Status
     *
     * @param string $external_id  external ID
     * @param string $ewallet_type E-wallet type (OVO, DANA, LINKAJA
     *
     * @return array please check for responses for each e-wallet type
     * https://xendit.github.io/apireference/?bash#get-payment-status
     * @throws Exceptions\ApiException
     */
    public static function getPaymentStatus($external_id, $ewallet_type)
    {
        $url = static::classUrl()
            . '?external_id=' . $external_id
            . '&ewallet_type=' . $ewallet_type;

        return static::_request('GET', $url);
    }
}
