<?php

/**
 * Refund.php
 * php version 7.3.0
 *
 * @category Class
 * @package  Xendit
 * @author   Yanuar <yanuaraditia@outlook.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

/**
 * Class Refund
 *
 * @category Class
 * @package  Xendit
 * @author   Yanuar <yanuaraditia@outlook.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Refund
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
    public static function classUrl(): string
    {
        return "/refunds";
    }

    /**
     * Instantiate required params for Create
     *
     * @return string[]
     */
    public static function createReqParams(): array
    {
        return [
            'payment_request_id',
            'reference_id',
            'invoice_id',
            'currency',
            'amount',
            'reason',
            'metadata'
        ];
    }
}
