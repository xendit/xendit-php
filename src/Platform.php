<?php

/**
 * Platform.php
 * php version 7.4.0
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Exceptions\InvalidArgumentException;

/**
 * Class Platform
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Platform
{
    use ApiOperations\Request;

    /**
     * Available account type
     *
     * @return array
     */
    public static function accountType()
    {
        return ["MANAGED", "OWNED"];
    }

    /**
     * Available unit route
     *
     * @return array
     */
    public static function unitRoute()
    {
        return ["percent", "flat"];
    }

    /**
     * Validation for account type
     *
     * @param string $account_type Account type
     *
     * @return void
     */
    public static function validateAccountType($account_type = null)
    {
        if (!in_array($account_type, self::accountType())) {
            $msg = "Account type is invalid. Available types: MANAGED, OWNED";
            throw new InvalidArgumentException($msg);
        }
    }

    /**
     * Validation for unit route
     *
     * @param string $unit unit route
     *
     * @return void
     */
    public static function validateUnitRoute($unit = null)
    {
        if (!in_array($unit, self::unitRoute())) {
            $msg = "Unit value is invalid. Available values: percent, flat";
            throw new InvalidArgumentException($msg);
        }
    }

    /**
     * Create account
     *
     * @param array  $params user params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#create-account
     * @throws Exceptions\ApiException
     */
    public static function createAccount($params = [])
    {
        $requiredParams = ['email', 'type'];

        self::validateParams($params, $requiredParams);
        self::validateAccountType($params['type']);

        $url = '/v2/accounts';

        return static::_request('POST', $url, $params);
    }

    /**
     * Get Account by ID
     *
     * @param string $account_id
     *
     * @return array
     * https://developers.xendit.co/api-reference/#get-account-by-id
     * @throws Exceptions\ApiException
     */
    public static function getAccount($account_id)
    {
        $url = '/v2/accounts/'.$account_id;

        return static::_request('GET', $url);
    }

    /**
     * Update account
     *
     * @param string  $account_id
     * @param array  $params user params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#update-account
     * @throws Exceptions\ApiException
     */
    public static function updateAccount($account_id, $params = [])
    {
        $requiredParams = ['email'];

        self::validateParams($params, $requiredParams);

        $url = '/v2/accounts/'.$account_id;

        return static::_request('PATCH', $url, $params);
    }

    /**
     * Create transfer
     *
     * @param array  $params user params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#create-transfers
     * @throws Exceptions\ApiException
     */
    public static function createTransfer($params = [])
    {
        $requiredParams = ['reference', 'amount', 'source_user_id', 'destination_user_id'];

        self::validateParams($params, $requiredParams);

        $url = '/transfers';

        return static::_request('POST', $url, $params);
    }

    /**
     * Create fee rule
     *
     * @param array  $params user params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#create-fee-rule
     * @throws Exceptions\ApiException
     */
    public static function createFeeRule($params = [])
    {
        $requiredParams = ['name', 'unit', 'amount', 'currency'];

        self::validateParams($params, $requiredParams);
        self::validateUnitRoute($params['unit']);

        $payload = array();
        $payload['name'] = $params['name'];
        if (isset($params['description'])) {
            $payload['description'] = $params['description'];
        }
        $payload['routes'] = [
            array(
                'unit' => $params['unit'],
                'amount' => $params['amount'],
                'currency' => $params['currency']
            )
        ];

        $url = '/fee_rules';

        return static::_request('POST', $url, $payload);
    }

    /**
     * Set Callback URL
     *
     * @param string  $type
     * @param array  $params user params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#set-callback-urls
     * @throws Exceptions\ApiException
     */
    public static function setCallbackUrl($type, $params = [])
    {
        $requiredParams = ['url'];

        self::validateParams($params, $requiredParams);

        $url = '/callback_urls/'.$type;

        return static::_request('POST', $url, $params);
    }
}
