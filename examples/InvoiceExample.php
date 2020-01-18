<?php

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey(
    <<<'TAG'
xnd_development_prHUBDfVuOQTxyWTQSNkpjn9OwX9ZSUjdqgF9GenZ6hwhUQkc3NZ9WVexdH
TAG
);
$params = ['external_id' => 'demo_147580196267',
     'payer_email' => 'sample_email@xendit.co',
     'description' => 'Trip to Bali',
     'amount' => 23000];
$createInvoice = \Xendit\Invoice::create($params);
var_dump($createInvoice);
