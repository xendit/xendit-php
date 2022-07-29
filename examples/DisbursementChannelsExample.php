<?php

/**
 * DisbursementChannelsExample.php
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

$disbursementChannels = \Xendit\DisbursementChannels::getDisbursementChannels();
var_dump($disbursementChannels);

$channelCategory = 'BANK';
$getdisbursementChannelsByCategory = \Xendit\DisbursementChannels::getDisbursementChannelsByChannelCategory($channelCategory);
var_dump($getdisbursementChannelsByCategory);

$channelCode = 'PH_BDO';
$getdisbursementChannelsByCode = \Xendit\DisbursementChannels::getDisbursementChannelsByChannelCode($channelCode);
var_dump($getdisbursementChannelsByCode);
