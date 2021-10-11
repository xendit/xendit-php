<?php

/**
 * PayLater.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Asoka Wotulo <asokawotulo2@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Exceptions\InvalidArgumentException;
use Xendit\Exceptions\ApiException;

/**
 * Class PayLater
 *
 * @category Class
 * @package  Xendit
 * @author   Asoka Wotulo <asokawotulo2@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PayLater
{
    use ApiOperations\Request;

    /**
     * Instantiate relative URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/paylater";
    }

    /**
     * Retrieve list of PayLater plans
     *
     * @param array $params
     * @return array
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public static function initiatePayLaterPlans($params = [])
    {
        $requiredParams = [
            'customer_id',
            'channel_code',
            'currency',
            'amount',
            'order_items',
        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/plans';

        return static::_request('POST', $url, $params);
    }

    /**
     * Create PayLater transaction / generate checkout URL
     *
     * @param array $params
     * @return array
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public static function createPayLaterCharge($params = [])
    {
        $requiredParams = [
            'plan_id',
            'reference_id',
            'checkout_method',
            'success_redirect_url',
        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/charges';

        return static::_request('POST', $url, $params);
    }
}
