<?php

/**
 * QRCode.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Dave <kevindave@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
namespace Xendit;

use Xendit\Exceptions\ApiException;
use Xendit\Exceptions\InvalidArgumentException;

/**
 * Class QRCode
 *
 * @category Class
 * @package  Xendit
 * @author   Dave <kevindave@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class QRCode
{
    use ApiOperations\Request;

    private static $apiVersion1 = '2020-07-01';
    private static $apiVersion2 = '2022-07-31';

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/qr_codes";
    }

    /**
     * Send a create request
     *
     * Create a QR Code
     * Required parameters:
     * For API version 2020-07-01: external_id, type, callback_url, amount (only if type = DYNAMIC).
     * For API version 2022-07-31: reference_id, type, currency, amount (only if type = DYNAMIC).
     *
     * To create QR Code for a Xenplatform sub-account,
     * include for-user-id in $params
     *
     * Please refer to this documentation for more detailed info
     * https://xendit.github.io/apireference/#create-qr-code
     *
     * @param array $params user's parameters
     *
     * @return array [
     *   'id' =>  string,
     *   'external_id' => string, (only for API version 2020-07-01)
     *   'callback_url' => string, (only for API version 2020-07-01)
     *   'amount' => int,
     *   'qr_string' => string,
     *   'reference_id' => string, (only for API version 2022-07-31)
     *   'currency' => string, (only for API version 2022-07-31)
     *   'channel_code' => string, (only for API version 2022-07-31)
     *   'expires_at' => date, (only for API version 2022-07-31)
     *   'type' => 'DYNAMIC' || 'STATIC',
     *   'status' => 'ACTIVE' || 'INACTIVE',
     *   'created' => date,
     *   'updated' => date,
     * ]
     *
     * @throws InvalidArgumentException if some parameters are missing or invalid
     * @throws ApiException if request status code is not 2xx
     **/
    public static function create($params = [])
    {
        if (!array_key_exists('type', $params)) {
            $message = 'Please specify "type" inside your parameters.';
            throw new InvalidArgumentException($message);
        }

        $requiredParams = ['type'];

        if ($params['type'] === 'DYNAMIC') {
            array_push($requiredParams, 'amount');
        } elseif ($params['type'] !== 'STATIC') {
            $message = 'Invalid QR Code type';
            throw new InvalidArgumentException($message);
        }

        if (array_key_exists('api_version', $params)) {
            $params['api-version'] = $params['api_version'];
            unset($params['api_version']);
        } else {
            $params['api-version'] = QRCode::$apiVersion1;
        }

        if ($params['api-version'] === QRCode::$apiVersion1) {
            array_push($requiredParams, 'external_id', 'callback_url');
        } elseif ($params['api-version'] === QRCode::$apiVersion2) {
            array_push($requiredParams, 'reference_id', 'currency');

            if (array_key_exists('callback_url', $params)) {
                $message = 'The API version 2022-07-31 does not support passing callback URL in the request. Please set the callback URL from your Xendit Dashboard instead.';
                throw new InvalidArgumentException($message);
            }
        } else {
            $message = 'Invalid API version';
            throw new InvalidArgumentException($message);
        }

        self::validateParams($params, $requiredParams);

        $url = static::classUrl();

        return static::_request('POST', $url, $params);
    }

    /**
     * Get QR Code
     *
     * Get a QR Code detail
     *
     * Please refer to this documentation for more detailed info
     * https://xendit.github.io/apireference/#get-qr-code-by-external-id
     *
     * @param string $id ID of the QR Code.
     *  For API Version 2022-07-31, this should be the ID with `qr_` prefix that is returned after creating the QR Code.
     *  Otherwise, this ID should be the external ID that is provided during the creation of the QR Code.
     * @param string|null $api_version The API version.
     *  Valid values are:
     *  - 2020-07-01 (default)
     *  - 2022-07-31
     *
     * @return array [
     *   'id' =>  string,
     *   'external_id' => string, (only for API version 2020-07-01)
     *   'callback_url' => string, (only for API version 2020-07-01)
     *   'amount' => int,
     *   'qr_string' => string,
     *   'reference_id' => string, (only for API version 2022-07-31)
     *   'currency' => string, (only for API version 2022-07-31)
     *   'channel_code' => string, (only for API version 2022-07-31)
     *   'expires_at' => date, (only for API version 2022-07-31)
     *   'type' => 'DYNAMIC' || 'STATIC',
     *   'status' => 'ACTIVE' || 'INACTIVE',
     *   'created' => date,
     *   'updated' => date,
     * ]
     *
     * @throws ApiException
     */
    public static function get(string $id, string $api_version = null)
    {
        $params = [];
        if ($api_version !== null) {
            $params['api-version'] = $api_version;
        }

        $url = static::classUrl(). '/' . $id;
        return static::_request('GET', $url, $params);
    }
}
