<?php

namespace Xendit;

/**
 * Class Invoice
 *
 * @package Xendit
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
     */
    public static function expireInvoice($id, $options = [])
    {
        $url =  '/invoices/' . $id . '/expire!';

        return static::_request('POST', $url, $options);
    }
}
