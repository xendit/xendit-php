<?php

/**
 * CardsExample.php
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

Xendit::setApiKey(
    <<<'TAG'
xnd_development_prHUBDfVuOQTxyWTQSNkpjn9OwX9ZSUjdqgF9GenZ6hwhUQkc3NZ9WVexdH
TAG
);

$params = [
    'token_id' => '5c1105fe15dcfc7bc88b6ec7',
    'external_id'=> 'card_1234321',
    'amount'=> 20000,
    'card_cvn'=>'123',
    'capture'=> false
];

$createCharge = \Xendit\Cards::create($params);
var_dump($createInvoice);

$id = $createInvoice['id'];

$getInvoice = \Xendit\Cards::retrieve($id);
var_dump($getInvoice);
