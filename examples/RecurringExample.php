<?php

/**
 * RecurringExample.php
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
    'external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000,
    'interval' => 'MONTH',
    'interval_count' => 1
];

$createRecurring = \Xendit\Recurring::create($params);
var_dump($createRecurring);

$id = $createRecurring['id'];

$retrieveParams = [
    'for-user-id' => '<enter user id>'
];
$getRecurring = \Xendit\Recurring::retrieve($id, $retrieveParams);
var_dump($getRecurring);

$editRecurring = \Xendit\Recurring::update($id, ['amount' => 10000]);
var_dump($editRecurring);

$pauseRecurring = \Xendit\Recurring::pause($id);
var_dump($pauseRecurring);

$resumeRecurring = \Xendit\Recurring::resume($id);
var_dump($resumeRecurring);

$stopRecurring = \Xendit\Recurring::stop($id);
var_dump($stopRecurring);
