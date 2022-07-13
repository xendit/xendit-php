<?php

/**
 * Disbursements.php
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
 * Class Disbursements
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Disbursements
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
    public static function createReqParams()
    {
        return [
            'external_id',
            'bank_code',
            'account_holder_name',
            'account_number',
            'description',
            'amount'
        ];
    }

    /**
     * Send a create batch request
     *
     * @param array $params user's params
     *
     * @return array[
     * 'created'=> string,
     * 'reference'=> string,
     * 'total_uploaded_amount'=> int,
     * 'total_uploaded_count'=> int,
     * 'status'=> 'NEEDS_APPROVAL',
     * 'id'=> string
     * ]
     * @throws Exceptions\ApiException
     */
    public static function createBatch($params = [])
    {
        $requiredParams = ['reference', 'disbursements'];

        self::validateParams($params, $requiredParams);

        $url = '/batch_disbursements';

        return static::_request('POST', $url, $params);
    }

    /**
     * Send GET request to retrieve data by external id
     *
     * @param string $external_id external id
     *
     * @return array[
     *  [
     * 'user_id'=> '5785e6334d7b410667d355c4',
     * 'external_id'=> 'disbursement_12345',
     * 'amount'=> 500000,
     * 'bank_code'=> 'BCA',
     * 'account_holder_name'=> 'Rizky',
     * 'disbursement_description'=> 'Custom description',
     * 'status'=> 'PENDING',
     * 'id'=> '57c9010f5ef9e7077bcb96b6'
     * ],[
     * 'user_id'=> '5785e6334d7b410667d355c4',
     * 'external_id'=> 'disbursement_12345',
     * 'amount'=> 450000,
     * 'bank_code'=> 'BNI',
     * 'account_holder_name'=> 'Jajang',
     * 'disbursement_description'=> 'Custom description',
     * 'status'=> 'COMPLETED',
     * 'id'=> '5a963089fd5fe5b6508f0b7b',
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]
     * ]
     * @throws Exceptions\ApiException
     */
    public static function retrieveExternal($external_id, $params = [])
    {
        $url = static::classUrl() . '?external_id=' . $external_id;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to retrieve available banks
     *
     * @return array[
     * [
     * 'name'=> 'Bank Mandiri',
     * 'code'=> 'MANDIRI',
     * 'can_disburse'=> true,
     * 'can_name_validate'=> true
     * ],[
     * 'name'=> 'Bank Rakyat Indonesia (BRI)',
     * 'code'=> 'BRI',
     * 'can_disburse'=> true,
     * 'can_name_validate'=> true
     * ],[
     * 'name'=> 'Bank Central Asia (BCA)',
     * 'code'=> 'BCA',
     * 'can_disburse'=> true,
     * 'can_name_validate'=> true
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getAvailableBanks()
    {
        $url = '/available_disbursements_banks';
        return static::_request('GET', $url);
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createV1ReqParams()
    {
        return [
            'xendit_idempotency_key',
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
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]
     * @throws Exceptions\ApiException
     */
    public static function createDisbursement($params = [])
    {
        self::validateParams($params, static::createV1ReqParams());
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
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementByID($disbursement_id, $params = [])
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
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
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
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementsByReferenceID($reference_id, $params = [])
    {
        $url = static::classUrl() . '?reference_id=' . $reference_id;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to Get Disbursement Channels
     *
     * @param none
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannels()
    {
        $url = '/disbursement-channels';
        return static::_request('GET', $url);
    }

    /**
     * Send GET request to Get Disbursement Channels by Channel Category
     *
     * @param string $channel_category channel category
     * @param array $params extra parameters
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannelsByChannelCategory($channel_category, $params = [])
    {
        $url = '/disbursement-channels?channel_category=' . $channel_category;
        return static::_request('GET', $url, $params);
    }

    /**
     * Send GET request to Get Disbursement Channels by Channel Code
     *
     * @param string $channel_code channel Code
     * @param array $params extra parameters
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ]]
     * @throws Exceptions\ApiException
     */
    public static function getDisbursementChannelsByChannelCode($channel_code, $params = [])
    {
        $url = '/disbursement-channels?channel_code=' . $channel_code;
        return static::_request('GET', $url, $params);
    }
}
