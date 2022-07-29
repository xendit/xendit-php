<?php

/**
 * DisbursementsPHP.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use InvalidArgumentException;

/**
 * Class DisbursementsPHP
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DisbursementsPHP
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return '/disbursements';
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createPHPReqParams()
    {
        return [
            'xendit-idempotency-key',
            'reference_id',
            'currency',
            'channel_code',
            'account_name',
            'account_number',
            'description',
            'amount'
        ];
    }

    /**
     * Optional params for beneficiary
     *
     * @return array
     */
    public static function beneficiaryReqParams()
    {
        return [
            'type',
            'given_names',
            'middle_name',
            'surname',
            'business_name',
            'street_line1',
            'street_line2',
            'city',
            'province',
            'state',
            'country',
            'zip_code',
            'mobile_number',
            'phone_number',
            'email',
        ];
    }

    /**
     * Optional params for receipt Notification
     *
     * @return array
     */
    public static function receiptNotificationReqParams()
    {
        return [
            'email_to',
            'email_cc',
            'email_bcc'
        ];
    }

    /**
     * Send POST request to create disbursement
     * @param array $params required parameters
     *
     * @return array[
     * [
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * receipt_notification => Array
     * beneficiary => Array
     * @throws Exceptions\ApiException
     */
    public static function createPHPDisbursement($params = [])
    {
        self::validateParams($params, static::createPHPReqParams());
        if (array_key_exists('beneficiary', $params)) {
            self::validateParams($params['beneficiary'], static::beneficiaryReqParams());
        }
        if (array_key_exists('receipt_notification', $params)) {
            self::validateParams($params['receipt_notification'], static::receiptNotificationReqParams());
        }
        return static::_request('POST', static::classUrl(), $params);
    }


    /**
     * Send GET request to get disbursement by id
     *
     * @param string $disbursement_id disbursement id
     * @param array $params extra parameters
     *
     * @return array[
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * receipt_notification => Array
     * beneficiary => Array
     * @throws Exceptions\ApiException
     */
    public static function getPHPDisbursementByID($disbursement_id, $params = [])
    {
        $url = static::classUrl() . '/' . $disbursement_id;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to get disbursement by reference_id
     *
     * @param string $reference_id reference_id id
     * @param array $params extra parameters
     *
     * @return array[
     * [
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float,
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * receipt_notification => Array
     * beneficiary => Array
     * ], [
     *  'id'=> 'disb-random-id-2',
     * 'reference_id'=> 'random-id-2',
     * 'currency'=> 'PHP',
     * 'amount'=> float,
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * receipt_notification => Array
     * beneficiary => Array
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getPHPDisbursementsByReferenceID($reference_id, $params = [])
    {
        $url = static::classUrl() . '?reference_id=' . $reference_id;
        return static::_request('GET', $url, $params);
    }
}
