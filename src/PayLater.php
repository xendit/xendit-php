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
    public static function classUrl(): string
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
    public static function initiatePayLaterPlans(array $params = []): array
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
    public static function createPayLaterCharge(array $params = []): array
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

    /**
     * Get PayLater Charge by ID
     *
     * @param string $id
     * @param array $params
     * @return array
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public static function getPayLaterChargeStatus(string $id, array $params = []): array
    {
        $requiredParams = [

        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/charges/'.$id;

        return static::_request('GET', $url, $params);
    }

    /**
     * Create Paylater Refund
     *
     * @param string $id
     * @param array $params
     * @return array
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public static function createPayLaterRefund(string $id, array $params = []): array
    {
        $requiredParams = [

        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/charges/'.$id.'/refunds';

        return static::_request('POST', $url, $params);
    }

    /**
     * Get Refund by Refund ID
     *
     * @param string $charge_id
     * @param string $refund_id
     * @param array $params
     * @return array
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public static function getPayLaterRefund(string $charge_id, string $refund_id, array $params = []): array
    {
        $requiredParams = [

        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/charges/'.$charge_id.'/refunds/'.$refund_id;

        return static::_request('GET', $url, $params);
    }

    /**
     * List Paylater Refunds
     *
     * @param string $charge_id
     * @param array $params Paylater Refunds params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#list-paylater-refunds
     * @throws Exceptions\ApiException
     */
    public static function listPayLaterRefund(string $charge_id, array $params = []): array
    {
        $url = static::classUrl() . '/charges/'.$charge_id.'/refunds/';

        return static::_request('GET', $url, $params);
    }


}
