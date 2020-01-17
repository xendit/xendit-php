<?php

namespace Xendit;

class Invoice
{
    use ApiOperations\Request;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\RetrieveAll;

    /**
     * @return string
     */
    public static function classUrl()
    {
        return "v2/invoices";
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return array
     */
    public function expireInvoice($id, $options = [])
    {
        $url =  '/invoices/' . $id . '/expire!';

        return static::_request('POST', $url, $options);
    }
}