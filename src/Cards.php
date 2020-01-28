<?php

/**
 * Cards.php
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
 * Class Cards
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Cards
{
    use ApiOperations\Request;
    use ApiOperations\Retrieve;
    use ApiOperations\Create;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/credit_card_charges";
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams()
    {
        return ['token_id', 'external_id', 'amount'];
    }

    /**
     * Reverse authorized charge
     *
     * @param string $id      charge ID
     * @param array  $params  user params
     * @param array  $headers user headers
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function reverseAuthorization($id, $params = [], $headers = [])
    {
        $url = self::classUrl() . '/' . $id . '/auth_reversal';
        $requiredParams = ['external_id'];

        self::validateParams($params, $requiredParams);

        return static::_request('POST', $url, $params, $headers);
    }

    /**
     * Capture charge, see https://xendit.github.io/apireference/?bash#capture-charge
     * for more details
     *
     * @param string $id      charge ID
     * @param array  $params  user parameters
     * @param array  $headers user headers
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function capture($id, $params = [], $headers = [])
    {
        $url = self::classUrl() . '/' . $id . '/capture';
        $requiredParams = ['amount'];

        self::validateParams($params, $requiredParams);

        return static::_request('POST', $url, $params, $headers);
    }

    /**
     * Create refund, see https://xendit.github.io/apireference/?bash#capture-charge
     * for more details
     *
     * @param string $id      charge ID
     * @param array  $params  user parameters
     * @param array  $headers user headers
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function createRefund($id, $params = [], $headers = [])
    {
        $url = self::classUrl() . '/' . $id . '/refunds';
        $requiredParams = ['amount', 'external_id'];

        self::validateParams($params, $requiredParams);

        return static::_request('POST', $url, $params, $headers);
    }
}
