<?php

/**
 * PaymentChannelsExample.php
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

$list = \Xendit\PaymentChannels::list();
var_dump($list);
