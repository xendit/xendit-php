<?php

/**
 * CardsReverseExample.php
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
    'token_id' => '5e3149b915faf8739dd96178',
    'external_id' => 'card_' . time(),
    'authentication_id' => '5e3149b915faf8739dd96179',
    'amount' => 100000,
    'card_cvn' =>'123',
    'capture' => false
];

$createCharge = \Xendit\Cards::create($params);
var_dump($createCharge);

$reverseParams = ['external_id' => $createCharge['external_id']];

$reverseAuth = \Xendit\Cards::reverseAuthorization(
    $createCharge['id'],
    $reverseParams
);
var_dump($reverseAuth);
