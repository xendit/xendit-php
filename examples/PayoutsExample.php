<?php

/**
 * PayoutsExample.php
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
    'external_id' => 'payouts-123456789',
    'amount' => 50000,
    "email" => 'demo@xendit.co'
];

$createPayout = \Xendit\Payouts::create($params);
var_dump($createPayout);

$id = $createPayout['id'];

$getPayout = \Xendit\Payouts::retrieve($id);
var_dump($getPayout);

$voidPayout = \Xendit\Payouts::void($id);
var_dump($voidPayout);
