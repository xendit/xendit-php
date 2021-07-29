<?php

/**
 * Promotion.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Christian <christian.atilano@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
namespace Xendit;

use Xendit\Exceptions\InvalidArgumentException;

/**
 * Class Promotion
 *
 * @category Class
 * @package  Xendit
 * @author   Christian <christian.atilano@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Promotion
{
    use ApiOperations\Request;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/promotions";
    }

    /**
     * Send a create request
     *
     * Create a Promotion
     *
     * either promo_code or bin_list is required
     * either discount_percent or discount_amount is required
     *
     * Please refer to this documentation for more detailed info
     * https://developers.xendit.co/api-reference/#create-promotion
     *
     * @param array $params user's parameters
     *
     * @return array [
     *   'business_id' =>  string,
     *   'currency' => string,
     *   'created' => string,
     *   'description' => string,
     *   'discount_amount' => int,
     *   'end_time' => string,
     *   'id' => string,
     *   'promo_code' => string,
     *   'reference_id' => string,
     *   'start_time' => string,
     *   'status' => string,
     *   'type' => string,
     * ]
     *
     * @throws Exceptions\InvalidArgumentException
     *
     * @throws Exceptions\ApiException if request status code is not 2xx
     **/
    public static function create($params = [])
    {
        if (!array_key_exists('promo_code', $params)
            && !array_key_exists('bin_list', $params)
        ) {
            $message = 'Please specify "promo_code" or "bin_list"' .
                       'inside your parameters.';
            throw new InvalidArgumentException($message);
        }

        if (!array_key_exists('discount_percent', $params)
            && !array_key_exists('discount_amount', $params)
        ) {
            $message = 'Please specify "discount_percent" or "discount_amount"' .
                       'inside your parameters.';
            throw new InvalidArgumentException($message);
        }

        $requiredParams = [
            'reference_id',
            'description',
            'currency',
            'start_time',
            'end_time',
        ];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl();

        return static::_request('POST', $url, $params);
    }
}
