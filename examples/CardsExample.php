<?php

/**
 * CardsExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Dotenv\Dotenv;
use Xendit\Xendit;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
Xendit::setApiKey(getenv('SECRET_API_KEY'));

$params = [
    'token_id' => '5e2e8231d97c174c58bcf644',
    'external_id' => 'card_' . time(),
    'authentication_id' => '5e2e8658bae82e4d54d764c0',
    'amount' => 100000,
    'card_cvn' =>'123',
    'capture' => false
];

$captureParams = ['amount' => 100000];

$refundParams = [
    'external_id' => $params['external_id'],
    'amount' => 20000
];

$createCharge = \Xendit\Cards::create($params);
var_dump($createCharge);

$id = $createCharge['id'];

$getCharge = \Xendit\Cards::retrieve($id);
var_dump($getCharge);

$captureCharge = \Xendit\Cards::capture($id, $captureParams);
var_dump($captureParams);

$getCharge = \Xendit\Cards::retrieve($id);
var_dump($getCharge);

$refund = \Xendit\Cards::createRefund($id, $refundParams);
var_dump($refund);


