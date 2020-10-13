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
   * Required parameters: external_id, type, callback_url, amount.
   * For DYNAMIC QR Code type, amount is required.
   * For STATIC QR Code type, amount will be ignored.
   *
   * To create QR Code for a Xenplatform sub-account, include for-user-id in $params
   *
   * Please refer to this documentation for more detailed info
   * https://xendit.github.io/apireference/#create-qr-code
   *
   * @param array $params user's parameters
   * @return array [
   *   'id' =>  string,
   *   'external_id' => string,
   *   'amount' => int,
   *   'qr_string' => string,
   *   'callback_url' => string,
   *   'type' => 'DYNAMIC' || 'STATIC',
   *   'status' => 'ACTIVE' || 'INACTIVE',
   *   'created' => date,
   *   'updated' => date,
   * ]
   * @throws Exception\InvalidArgumentException if type is not exist or not one of DYNAMIC or STATIC
   * @throws Exception\ApiException if request status code is not 2xx
   **/
  public static function create($params = [])
  {
    $requiredParams = [];

    if (!array_key_exists('type', $params)) {
      $message = 'Please specify "type" inside your parameters.';
      throw new InvalidArgumentException($message);
    }

    if ($params['type'] === 'DYNAMIC') {
      $requiredParams = ['external_id', 'type', 'callback_url', 'amount'];
    } elseif ($params['type'] === 'STATIC') {
      $requiredParams = ['external_id', 'type', 'callback_url'];
    } else {
      $message = 'Invalid QR Code type';
      throw new InvalidArgumentException($message);
    }

    self::validateParams($params, $requiredParams);

    $url = static::classUrl();

    return static::_request('POST', $url, $params);
  }

  /**
   * Get QR Code
   *
   * Get a QR Code by its external_id
   *
   * Please refer to this documentation for more detailed info
   * https://xendit.github.io/apireference/#get-qr-code-by-external-id
   *
   * @param string $external_id Merchant provided unique ID used to create QR code
   * @return array [
   *   'id' =>  string,
   *   'external_id' => string,
   *   'amount' => int,
   *   'qr_string' => string,
   *   'callback_url' => string,
   *   'type' => 'DYNAMIC' || 'STATIC',
   *   'status' => 'ACTIVE' || 'INACTIVE',
   *   'created' => date,
   *   'updated' => date,
   * ]
   * @throws Exception\ApiException
   **/
  public static function get(string $external_id)
  {
      $url = static::classUrl(). '/' . $external_id;

      return static::_request('GET', $url);
  }
}
