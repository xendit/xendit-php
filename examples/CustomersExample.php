<?php

/**
 * EWalletsExample.php
 * php version 7.4.3
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$customerParams = [
    'reference_id' => '' . time(),
    'given_names' => 'customer 1',
    'email' => 'customer@website.com',
    'description' => 'dummy customer',
    'middle_name' => 'middle',
    'surname' => 'surname',
    'addresses' => [
        [
            'country' => 'ID',
            'street_line1' => 'Jl. 123',
            'street_line2' => 'Jl. 456',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'state' => '-',
            'postal_code' => '12345'
        ]
    ],
    'metadata' => [
        'meta' => 'data'
    ]
];

echo "Creating customer...\n";
$createCustomer = \Xendit\Customers::createCustomer($customerParams);
var_dump($createCustomer);

echo "Retrieving customer by reference ID...\n";
$getCustomer = \Xendit\Customers::getCustomerByReferenceID(
    $customerParams['reference_id']
);
var_dump($getCustomer);
