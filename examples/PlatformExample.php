<?php

/**
 * PlatformExample.php
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
    'email' => 'customer@website.com',
    'type' => 'OWNED',
    'public_profile' => ['business_name' => 'customer company']
];

$createAccount = \Xendit\Platform::createAccount($params);
var_dump($createAccount);

$accountId = $createAccount['id'];

$getAccount = \Xendit\Platform::getAccount($accountId);
var_dump($getAccount);

$updateParams = [
    'email' => 'customer@website.com',
    'public_profile' => ['business_name' => 'customer company updated']
];
$updateAccount = \Xendit\Platform::updateAccount($accountId, $updateParams);
var_dump($updateAccount);

$transferParams = [
    'reference' => ''.time(),
    'amount' => 50000,
    'source_user_id' => '54afeb170a2b18519b1b8768',
    'destination_user_id' => '5cafeb170a2b1851246b8768',
];
$createTransfer = \Xendit\Platform::createTransfer($transferParams);
var_dump($createTransfer);

$feeRuleParams = [
    'name' => 'standard_platform_fee',
    'description' => 'Fee charged to insurance agents based in Java',
    'unit' => 'flat',
    'amount' => 6500,
    'currency' => 'IDR'
];
$createFeeRule = \Xendit\Platform::createFeeRule($feeRuleParams);
var_dump($createFeeRule);

$callbackUrlParams = [
    'url' => 'https://webhook.site/c9c9140b-96b8-434c-9c59-7440eeae4d7f'
];
$callbackType = 'invoice';
$setCallbackUrl = \Xendit\Platform::setCallbackUrl($callbackType, $callbackUrlParams);
var_dump($setCallbackUrl);
