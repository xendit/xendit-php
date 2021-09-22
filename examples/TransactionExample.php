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

$list = \Xendit\Transaction::list();
var_dump($list);

$detail = \Xendit\Transaction::detail('txn_4b401a5f-47b1-4aab-8136-f7c4440d571f');
var_dump($detail);
