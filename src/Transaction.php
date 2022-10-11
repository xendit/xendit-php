<?php

/**
 * Transaction.php
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
 * Class Transaction
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class Transaction
{
    use ApiOperations\Request;

    /**
     * List transactions
     *
     * @param array  $params transaction params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#get-transaction
     * @throws Exceptions\ApiException
     */
    public static function list($params = [])
    {
        $url = '/transactions';

        return static::_request('GET', $url, $params);
    }

    /**
     * Get transaction
     *
     * @param string $transaction_id
     *
     * @return array
     * https://developers.xendit.co/api-reference/#get-transaction
     * @throws Exceptions\ApiException
     */
    public static function detail(string $transaction_id)
    {
        $url = '/transactions/'.$transaction_id;

        return static::_request('GET', $url);
    }
}
