<?php

/**
 * VirtualAccounts.php
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
 * Class VirtualAccounts
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class VirtualAccounts
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/callback_virtual_accounts";
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams()
    {
        return ['external_id', 'bank_code', 'name'];
    }

    /**
     * Instantiate required params for Update
     *
     * @return array
     */
    public static function updateReqParams()
    {
        return [];
    }

    /**
     * Get available VA banks
     *
     * @return array[
     * 'name' => string,
     * 'code' => string
     * ]
     * @throws Exceptions\ApiException
     */
    public static function getVABanks()
    {
        $url = '/available_virtual_account_banks';

        return static::_request('GET', $url);
    }

    /**
     * Get FVA payment
     *
     * @param string $payment_id payment ID
     *
     * @return array[
     * 'id'=> string,
     * 'payment_id'=> string,
     * 'callback_virtual_account_id'=> string,
     * 'external_id'=> string,
     * 'merchant_code'=> string,
     * 'account_number'=> string,
     * 'bank_code'=> string,
     * 'amount'=> int,
     * 'transaction_timestamp'=> string
     * ]
     * @throws Exceptions\ApiException
     */
    public static function getFVAPayment($payment_id)
    {
        $url = '/callback_virtual_account_payments/payment_id=' . $payment_id;

        return static::_request('GET', $url);
    }
}
