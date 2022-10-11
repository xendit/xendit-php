<?php

/**
 * Invoice.php
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
 * Class Invoice
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Invoice
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\RetrieveAll;

    /**
     * Instantiate base URL
     *
     * @return string
     */
    public static function classUrl()
    {
        return "/v2/invoices";
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
     * Expire Invoice
     *
     * @param string $id Invoice ID
     *
     * @return array[
     * 'id'=> string,
     * 'user_id'=> string,
     * 'external_id'=> string,
     * 'status'=> 'EXPIRED',
     * 'merchant_name'=> string,
     * 'merchant_profile_picture_url'=> string,
     * 'amount'=> int,
     * 'payer_email'=> string,
     * 'description'=> string,
     * 'invoice_url'=> string,
     * 'expiry_date'=> string,
     * 'available_banks'=> array,
     * 'should_exclude_credit_card'=> bool,
     * 'should_send_email'=> bool,
     * 'created'=> string,
     * 'updated'=> string
     * ]
     * @throws Exceptions\ApiException
     */
    public static function expireInvoice($id, $params=[])
    {
        $url =  '/invoices/' . $id . '/expire!';

        return static::_request('POST', $url, $params);
    }
}
