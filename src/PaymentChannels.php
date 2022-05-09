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
     * * GetPaymentChannels is in maintenance mode. Existing behavior on the endpoint will continue to work as before, but newer channels will be missing from the returned result.
     */
    public static function list()
    {
        $url = '/payment_channels';

        return static::_request('GET', $url);
    }
}
