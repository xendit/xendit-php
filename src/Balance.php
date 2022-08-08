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

use Xendit\Exceptions\InvalidArgumentException;

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
     * Available account type
     *
     * @return array
     */
    public static function accountType()
    {
        return ["CASH", "HOLDING", "TAX"];
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
            $msg = "Account type is invalid. Available types: CASH, TAX, HOLDING";
            throw new InvalidArgumentException($msg);
        }
    }

    /**
     * Available currency
     *
     * @return array
     */
    public static function currency()
    {
        return ["IDR", "PHP"];
    }

    /**
     * Validation for currency
     *
     * @param string $currency Currency
     *
     * @return void
     */
    public static function validateCurrency($currency = null)
    {
        if (!in_array($currency, self::currency())) {
            $msg = "Currency is invalid. Available currencies: IDR, PHP";
            throw new InvalidArgumentException($msg);
        }
    }

    /**
     * Send GET request to retrieve data
     *
     * @param string $account_type account type (CASH|HOLDING|TAX)
     *
     * @return array[
     *  'balance' => int
     * ]
     * @throws Exceptions\ApiException
     */
    public static function getBalance($account_type = null, $params = [])
    {
        self::validateAccountType($account_type);
        self::validateCurrency($params['currency']);
        $url = '/balance?account_type=' . $account_type . '&currency=' . $params['currency'];
        return static::_request('GET', $url, $params);
    }
}
