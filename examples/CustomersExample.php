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

$customerParamsOld = [
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

echo "Creating customer (2020-05-19)...\n";
$createCustomerOld = \Xendit\Customers::createCustomer($customerParamsOld);
var_dump($createCustomerOld);

echo "Retrieving customer by reference ID (2020-05-19)...\n";
$getCustomerOld = \Xendit\Customers::getCustomerByReferenceID(
    $customerParamsOld['reference_id']
);
var_dump($getCustomerOld);

$customerParamsNew = [
    'reference_id' => '' . time(),
    'type' => 'INDIVIDUAL',
    'email' => 'customer@website.com',
    'mobile_number' => '+6281212345678',
    'phone_number' => '+6289987654321',
    'description'  => 'test description',
    'kyc_documents' => [
        [
            'country' => 'ID',
            'type' => 'IDENTITY_CARD',
            'sub_type' => 'NATIONAL_ID',
            'document_name' => 'KTP',
            'document_number' => '1234567890',
            'expires_at' => '2025-06-02',
            'holder_name' => 'Holder name',
            'document_images' => [
                'https://file1.jpg',
                'https://file2.jpg'
            ]
        ]
    ],
    'metadata' => [
        'meta' => 'data'
    ],
    'individual_detail' => [
        'given_names' => 'John',
        'surname' => 'Doe',
        'nationality' => 'ID',
        'date_of_birth' => '1993-12-26',
        'place_of_birth' => 'Cirebon',
        'gender' => 'MALE',
        'employment' => [
            'employer_name' => 'Employer name',
            'nature_of_business' => 'Business',
            'role_description' => 'Employer'
        ]
    ],
    'business_detail' => [
        'business_name' => 'Business name',
        'business_type' => 'NON_PROFIT',
        'nature_of_business' => 'Charity',
        'business_domicile' => 'ID',
        'date_of_registration' => '2005-06-21'
    ],
    'addresses' => [
        [
            'country' => 'ID',
            'street_line1' => 'street line 1',
            'street_line2' => 'street line 2',
            'city' => 'Cirebon',
            'province_state' => 'Jawa Barat',
            'postal_code' => '21345',
            'category' => 'HOME',
            'is_primary' => true
        ]
    ],
    'identity_accounts' => [
        [
            'type' => 'EWALLET',
            'company' => 'GOPAY',
            'description' => 'gopay',
            'country' => 'ID',
            'properties' => [
                'account_number' => '12345',
                'account_holder_name' => 'John Doe',
                'currency' => 'IDR'
            ]
        ]
    ],
    'api-version' => '2020-10-31'
];

echo "Creating customer (2020-10-31)...\n";
$createCustomerNew = \Xendit\Customers::createCustomer($customerParamsNew);
var_dump($createCustomerNew);

echo "Retrieving customer by reference ID (2020-10-31)...\n";
$getCustomerNew = \Xendit\Customers::getCustomerByReferenceID(
    $customerParamsNew['reference_id'],
    ['api-version' => '2020-10-31']
);
var_dump($getCustomerNew);
