<?php

/**
 * DisbursementsPHPExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
    'reference_id' => 'reference_id',
    'currency' => 'PHP',
    'amount' => 15000,
    'channel_code' => 'PH_BDO', // if you do not know the channel code. You can find it from DisbursementChannels
    'account_name' => 'Test',
    'account_number' => '1234567890',
    'description' => 'PHP Disbursement from Example',
    'xendit-idempotency-key' =>  time()
];

$createDisbursements = \Xendit\DisbursementsPHP::createPHPDisbursement($params);
var_dump($createDisbursements);

// create php disbursement with beneficiary optional field
$beneficiary = [
    'type' => 'INDIVIDUAL',
    'given_names' => 'Test Name',
    'middle_name' => 'middle_name',
    'surname' => 'surname',
    'business_name' => 'business_name',
    'street_line1' => 'street_line1',
    'street_line2' => 'street_line2',
    'city' => 'city',
    'province' => 'province',
    'state' => 'state',
    'country' => 'country',
    'zip_code' => '12345',
    'mobile_number' => '9876543210',
    'phone_number' => '987654321',
    'email' => 'email@test.com'
];
$params['beneficiary'] = $beneficiary;
$params['xendit-idempotency-key'] = time();
$createDisbursementsWithbeneficiary = \Xendit\DisbursementsPHP::createPHPDisbursement($params);
var_dump($createDisbursementsWithbeneficiary);

// create php disbursement with receipt_notification optional field. We can pass either of them or both.
$receiptNotification = [
    'email_to' => ['test@test.com'],
    'email_cc' => [],
    'email_bcc' => []
];
$params['xendit-idempotency-key'] = time();
$params['receipt_notification'] = $receiptNotification;
$createDisbursementsWithReceipt = \Xendit\DisbursementsPHP::createPHPDisbursement($params);
var_dump($createDisbursementsWithReceipt);

$id = $createDisbursements['id'];
$getDisbursements = \Xendit\DisbursementsPHP::getPHPDisbursementByID($id);
var_dump($getDisbursements);

$reference_id = 'reference_id';
$getDisbursementsByRef = \Xendit\DisbursementsPHP::getPHPDisbursementsByReferenceID($reference_id);
var_dump($getDisbursementsByRef);
