<?php

/**
 * DisbursementsExample.php
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
    'external_id' => 'disb-12345678',
    'amount' => 15000,
    'bank_code' => 'BCA',
    'account_holder_name' => 'Joe',
    'account_number' => '1234567890',
    'description' => 'Disbursement from Example',
    'X-IDEMPOTENCY-KEY'
];

$batch_params = [
    'reference'=> 'disb_batch-12345678',
    'disbursements'=> [
        [
            'amount'=> 20000,
            'bank_code'=> 'BCA',
            'bank_account_name'=> 'Fadlan',
            'bank_account_number'=> '1234567890',
            'description'=> 'Batch Disbursement',
            'external_id'=> 'disbursement-1'
        ],
        [
            'amount'=> 30000,
            'bank_code'=> 'MANDIRI',
            'bank_account_name'=> 'Lutfi',
            'bank_account_number'=> '1234567891',
            'description'=> 'Batch Disbursement with email notifications',
            'external_id'=> 'disbursement-2',
            'email_to'=> ['test+to@xendit.co'],
            'email_cc'=> ['test+cc@xendit.co'],
            'email_bcc'=> ['test+bcc1@xendit.co', 'test+bcc2@xendit.co']
        ]
    ]
];

$createDisbursements = \Xendit\Disbursements::create($params);
var_dump($createDisbursements);

$id = $createDisbursements['id'];
$external_id = $params['external_id'];

$getDisbursementsBanks = \Xendit\Disbursements::getAvailableBanks();
var_dump($getDisbursementsBanks);

$getDisbursements = \Xendit\Disbursements::retrieve($id);
var_dump($getDisbursements);

$getDisbursementsByExt = \Xendit\Disbursements::retrieveExternal($external_id);
var_dump($getDisbursementsByExt);

$createBatchDisbursements = \Xendit\Disbursements::createBatch($batch_params);
var_dump($createBatchDisbursements);
