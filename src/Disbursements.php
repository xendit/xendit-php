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
     * @param array $params  user's params
     * @param array $options user's options
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function createBatch($params = [], $options = [])
    {
        $requiredParams = ['reference', 'disbursements'];

        self::validateParams($params, $requiredParams);

        $url = '/batch_disbursements';

        return static::_request('POST', $url, $params, $options);
    }

    /**
     * Send GET request to retrieve data by external id
     *
     * @param string $external_id external id
     * @param array  $options     user's options
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function retrieveExternal($external_id, $options = [])
    {
        $url = static::classUrl() . '?external_id=' . $external_id;
        return static::_request('GET', $url, [], $options);
    }

    /**
     * Send GET request to retrieve available banks
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function getAvailableBanks()
    {
        $url = '/available_disbursements_banks';
        return static::_request('GET', $url);
    }
}
