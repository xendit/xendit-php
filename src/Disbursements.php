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
        return ['external_id',
            'bank_code',
            'account_holder_name',
            'account_number',
            'description',
            'amount'];
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
    public static function retrieveExternal($external_id)
    {
        $url = static::classUrl() . '?external_id=' . $external_id;
        return static::_request('GET', $url);
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
}
