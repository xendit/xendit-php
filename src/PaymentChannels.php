<?php

/**
 * PaymentChannels.php
 * php version 7.4.0
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

/**
 * Class PaymentChannels
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PaymentChannels
{
    use ApiOperations\Request;

    /**
     * Payment channel list
     *
     * @return array
     * https://developers.xendit.co/api-reference/#get-payment-channels
     * @throws Exceptions\ApiException
     */
    public static function list()
    {
        $url = '/payment_channels';

        return static::_request('GET', $url);
    }
}
