<?php

/**
 * Customers.php
 * php version 7.4.3
 *
 * @category Class
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Exceptions\InvalidArgumentException;

/**
 * Class DirectDebit
 *
 * @category Class
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DirectDebit
{
    use ApiOperations\Request;

    /**
     * Instantiate linked account base URL
     *
     * @return string
     */
    public static function linkedAccountUrl()
    {
        return "/linked_account_tokens/";
    }

    /**
     * Instantiate payment method base URL
     *
     * @return string
     */
    public static function paymentMethodUrl()
    {
        return "/payment_methods";
    }

    /**
     * Instantiate direct debit payment base URL
     *
     * @return string
     */
    public static function directDebitPaymentUrl()
    {
        return "/direct_debits";
    }

    /**
     * Send a initialize linked account tokenization request
     *
     * @param array $params user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#initialize-linked-account-tokenization
     * @throws Exceptions\ApiException
     */
    public static function initializeLinkedAccountTokenization($params = [])
    {
        $requiredParams = ['customer_id', 'channel_code'];

        self::validateParams($params, $requiredParams);

        $url = static::linkedAccountUrl() . "auth";

        return static::_request("POST", $url, $params);
    }

    /**
     * Send a validate OTP for linked account request
     *
     * @param string $linked_account_token_id linked account token ID
     * @param array  $params                  user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#validate-otp-for-linked-account-token
     * @throws Exceptions\ApiException
     */
    public static function validateOTPForLinkedAccount(
        $linked_account_token_id,
        $params = []
    ) {
        $requiredParams = ['otp_code'];

        self::validateParams($params, $requiredParams);

        $url = static::linkedAccountUrl() . $linked_account_token_id .
               "/validate_otp";

        return static::_request("POST", $url, $params);
    }

    /**
     * Retrieve accessible accounts by linked account token
     *
     * @param string $linked_account_token_id linked account token ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#retrieve-accessible-accounts-by-linked-account-token
     * @throws Exceptions\ApiException
     */
    public static function retrieveAccessibleLinkedAccounts($linked_account_token_id)
    {
        $url = static::linkedAccountUrl() . $linked_account_token_id . "/accounts";

        return static::_request('GET', $url);
    }

    /**
     * Unbind linked account token
     *
     * @param string $linked_account_token_id linked account token ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#unbind-a-linked-account-token
     * @throws Exceptions\ApiException
     */
    public static function unbindLinkedAccountToken($linked_account_token_id)
    {
        $url = static::linkedAccountUrl() . $linked_account_token_id;

        return static::_request('DELETE', $url);
    }

    /**
     * Send a create payment method request
     *
     * @param array $params user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#create-payment-method
     * @throws Exceptions\ApiException
     */
    public static function createPaymentMethod($params = [])
    {
        $requiredParams = ['type', 'properties'];

        self::validateParams($params, $requiredParams);

        $url = static::paymentMethodUrl();

        return static::_request("POST", $url, $params);
    }

    /**
     * Get payment methods by customer ID
     *
     * @param string $customer_id customer ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#list-payment-methods
     * @throws Exceptions\ApiException
     */
    public static function getPaymentMethodsByCustomerID($customer_id)
    {
        $url = static::paymentMethodUrl() . "?customer_id=" . $customer_id;

        return static::_request('GET', $url);
    }

    /**
     * Send a create direct debit payment request
     *
     * @param array $params user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#create-direct-debit-payment
     * @throws Exceptions\ApiException
     */
    public static function createDirectDebitPayment($params = [])
    {
        $requiredParams = [
            'reference_id',
            'payment_method_id',
            'currency',
            'amount'
        ];

        self::validateParams($params, $requiredParams);

        $url = static::DirectDebitPaymentUrl();

        return static::_request("POST", $url, $params);
    }

    /**
     * Send a validate OTP for direct debit payment
     *
     * @param string $direct_debit_payment_id direct debit payment ID
     * @param array  $params                  user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#validate-otp-for-direct-debit-payment
     * @throws Exceptions\ApiException
     */
    public static function validateOTPForDirectDebitPayment(
        $direct_debit_payment_id,
        $params = []
    ) {
        $requiredParams = ['otp_code'];

        self::validateParams($params, $requiredParams);

        $url = static::directDebitPaymentUrl() . '/' . $direct_debit_payment_id .
               "/validate_otp/";

        return static::_request("POST", $url, $params);
    }

    /**
     * Get direct debit payment by ID
     *
     * @param string $direct_debit_payment_id direct debit payment ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#get-payment-by-id
     * @throws Exceptions\ApiException
     */
    public static function getDirectDebitPaymentByID($direct_debit_payment_id)
    {
        $url = static::directDebitPaymentUrl() . "/" . $direct_debit_payment_id .
               "/";

        return static::_request('GET', $url);
    }

    /**
     * Get direct debit payment by reference ID
     *
     * @param string $reference_id reference ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#get-payment-by-reference-id
     * @throws Exceptions\ApiException
     */
    public static function getDirectDebitPaymentByReferenceID($reference_id)
    {
        $url = static::directDebitPaymentUrl() . "?reference_id=" . $reference_id;

        return static::_request('GET', $url);
    }
}
