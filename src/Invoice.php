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
        return ['external_id', 'payer_email', 'description', 'amount'];
    }

    /**
     * Expire Invoice
     *
     * @param string $id      Invoice ID
     * @param array  $options User's options
     *
     * @return array
     * @throws Exceptions\ApiExceptions
     */
    public static function expireInvoice($id, $options = [])
    {
        $url =  '/invoices/' . $id . '/expire!';

        return static::_request('POST', $url, $options);
    }
}
