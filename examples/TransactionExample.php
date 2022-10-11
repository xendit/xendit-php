<?php

/**
 * TransactionExample.php
 * php version 7.4.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');
$params = [
    'types' => 'DISBURSEMENT',
    'for-user-id' => '<your user id>',
    'query-param'=> 'true'
];
$list = \Xendit\Transaction::list($params);
var_dump($list);

$detail = \Xendit\Transaction::detail('txn_13dd178d-41fa-40b7-8fd3-f83675d6f413');
var_dump($detail);
