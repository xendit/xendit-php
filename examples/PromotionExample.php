<?php

/**
 * PromotionExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Christian <christian.atilano@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
    'reference_id' => 'reference_123',
    'description' => 'test promotion',
    'currency' => 'IDR',
    'start_time' => (new DateTime('NOW'))->format('Y-d-m\TH:i:s.v\Z'),
    'end_time' => (new DateTime('NOW +1 day'))->format('Y-d-m\TH:i:s.v\Z'),
    'promo_code' => 'testpromo',
    'discount_amount' => 5000
];

$promotion = \Xendit\Promotion::create($params);
var_dump($promotion);
