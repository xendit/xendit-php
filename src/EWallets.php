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

    /**
     * Send a create e-wallet charge request
     *
     * @param array $params user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#create-ewallet-charge
     * @throws Exceptions\ApiException
     */
    public static function createEWalletCharge($params = [])
    {
        $requiredParams = ['reference_id', 'currency', 'amount', 'checkout_method'];

        self::validateParams($params, $requiredParams);

        $url = static::classUrl() . '/charges';

        return static::_request("POST", $url, $params);
    }

    /**
     * Get e-wallet charge status
     *
     * @param string $charge_id charge ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#get-ewallet-charge-status
     * @throws Exceptions\ApiException
     */
    public static function getEWalletChargeStatus($charge_id, $params=[])
    {
        $url = static::classUrl()
            . '/charges/' . $charge_id;

        return static::_request('GET', $url, $params);
    }
    
    /**
     * Void eWallet Charge
     *
     * @param string $charge_id charge ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/#void-ewallet-charge
     * @throws Exceptions\ApiException
     */
    public static function voidEwalletCharge($charge_id, $params=[])
    {
        $url = static::classUrl()
        . '/charges/' . $charge_id.'/void';
        
        return static::_request('POST', $url, $params);
    }
    
    /**
     * Refund eWallet Charge
     *
     * @param string $charge_id charge ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/#refund-ewallet-charge
     * @throws Exceptions\ApiException
     */
    public static function refundEwalletCharge($charge_id, $params=[])
    {
        $url = static::classUrl()
        . '/charges/' . $charge_id.'/refunds';
        
        return static::_request('POST', $url, $params);
    }
    
    /**
     * Get eWallet Refund by Refund ID
     *
     * @param string $charge_id charge ID
     * @param string $refund_id refund ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/#refund-ewallet-charge
     * @throws Exceptions\ApiException
     */
    public static function getRefund($charge_id, $refund_id, $params=[])
    {
        $url = static::classUrl()
        . '/charges/' . $charge_id.'/refunds/'.$refund_id;
        
        return static::_request('GET', $url, $params);
    }
    
    /**
     * Get eWallet Refund by Refund ID
     *
     * @param string $charge_id charge ID
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/#refund-ewallet-charge
     * @throws Exceptions\ApiException
     */
    public static function listRefund($charge_id, $params=[])
    {
        $url = static::classUrl()
        . '/charges/' . $charge_id.'/refunds/';
        
        return static::_request('GET', $url, $params);
    }
}
