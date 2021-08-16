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
 * Class Customers
 *
 * @category Class
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Customers
{
    use ApiOperations\Request;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/customers";
    }

    /**
     * Send a create customer request
     *
     * @param array $params user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#create-customer
     * @throws Exceptions\ApiException
     */
    public static function createCustomer($params = [])
    {
        $requiredParams = ['reference_id'];

        if (array_key_exists('api-version', $params)
            && $params['api-version'] == '2020-10-31'
        ) {
            array_push(
                $requiredParams,
                'type',
                'identity_accounts',
                'kyc_documents'
            );
        } else {
            array_push($requiredParams, 'given_names');
            if (!array_key_exists('mobile_number', $params)) {
                array_push($requiredParams, 'email');
            }

            if (!array_key_exists('email', $params)) {
                array_push($requiredParams, 'mobile_number');
            }
        }

        self::validateParams($params, $requiredParams);

        $url = static::classUrl();

        return static::_request("POST", $url, $params);
    }

    /**
     * Get customer by reference ID
     *
     * @param string $reference_id reference ID
     * @param array  $params       user's parameters
     *
     * @return array please check for responses parameters here
     * https://developers.xendit.co/api-reference/?bash#get-customer-by-reference-id
     * @throws Exceptions\ApiException
     */
    public static function getCustomerByReferenceID($reference_id, $params=[])
    {
        $url = static::classUrl()
            . '?reference_id=' . $reference_id;

        return static::_request('GET', $url, $params);
    }
}
