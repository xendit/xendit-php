<?php

/**
 * VirtualAccountExample.php
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

$params = ["external_id" => "VA_fixed-12341234",
   "bank_code" => "MANDIRI",
   "name" => "Steve Wozniak"
];

$createVA = \Xendit\VirtualAccounts::create($params);
var_dump($createVA);

$id = $createVA['id'];

$getVABanks = \Xendit\VirtualAccounts::getVABanks();
var_dump($getVABanks);

$getVA = \Xendit\VirtualAccounts::retrieve($id);
var_dump($getVA);

$updateParams = ["suggested_amount" => 1000];

$updateVA = \Xendit\VirtualAccounts::update($id, $updateParams);
var_dump($updateVA);

$paymentID = "VA_fixed-1579666681_1579666702976";

$getFVAPayment = \Xendit\VirtualAccounts::getFVAPayment($paymentID);
var_dump($getFVAPayment);
