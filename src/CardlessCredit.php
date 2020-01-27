<?php

/**
 * CardlessCredit.php
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
 * Class CardlessCredit
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class CardlessCredit
{
    use ApiOperations\Request;
    use ApiOperations\Create;

    /**
     * Instantiate relative URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/cardless-credit";
    }

    /**
     * Instantiate required params for Create
     *
     * @return array
     */
    public static function createReqParams()
    {
        return [
            'cardless_credit_type',
            'external_id',
            'amount',
            'payment_type',
            'items',
            'customer_details',
            'shipping_address',
            'redirect_url',
            'callback_url'
        ];
    }
}
