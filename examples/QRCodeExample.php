<?php

/**
 * QRCodeExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Dave <kevindave@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
  'external_id' => 'external_123',
  'type' => 'STATIC',
  'callback_url' => 'https://webhook.site',
  'amount' => 10000,
];

$created_qr_code = \Xendit\QRCode::create($params);
var_dump($created_qr_code);

$qr_code = \Xendit\QRCode::get('external_123');
var_dump($qr_code);
