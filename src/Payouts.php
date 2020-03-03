<?php

/**
 * Payouts.php
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
 * Class Payouts
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Payouts
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;

    /**
     * Instantiate relative URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/payouts";
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams()
    {
        return ['external_id', 'amount'];
    }

    /**
     * Void a payout
     *
     * @param string $id payout ID
     *
     * @return array[
     * 'id'=> string,
     * 'external_id'=> string,
     * 'amount'=> int,
     * 'passcode'=> string,
     * 'merchant_name'=> string,
     * 'status'=> 'ISSUED' || 'DISBURSING' || 'VOIDED' || 'LOCKED'
     *            || 'COMPLETED' || 'FAILED',
     * 'expiration_timestamp'=> string,
     * 'created'=> string'
     * ]
     * @throws Exceptions\ApiException
     */
    public static function void($id)
    {
        $url = static::classUrl() . '/' . $id . '/void';

        return static::_request('POST', $url);
    }
}
