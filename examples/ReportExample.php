<?php

/**
 * ReportExample.php
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
    'type' => 'TRANSACTIONS'
];
$generate = \Xendit\Report::generate($params);
var_dump($generate);

$detail = \Xendit\Report::detail('report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28');
var_dump($detail);
