<?php

/**
 * CustomersTest.php
 * php version 7.4.3
 *
 * @category Test
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Customers;
use Xendit\TestCase;

/**
 * Class CustomersTest
 *
 * @category Class
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class CustomersTest extends TestCase
{
    const CUSTOMER_PARAMS_20200519 = [
        'reference_id' => 'test-ref-id',
        'given_names' => 'customer 1',
        'email' => 'customer@website.com',
        'mobile_number' => '+6281212345678',
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

    const CUSTOMER_RESPONSE_20200519 = [
        'id' => '0f2de6f1-2023-403b-aaea-5f0a8a611f7d',
        'reference_id' => 'test-ref-id',
        'given_names' => 'customer 1',
        'email' => 'customer@website.com',
        'mobile_number' => '+6281212345678',
        'description' => 'dummy customer',
        'middle_name' => 'middle',
        'surname' => 'surname',
        'phone_number' => null,
        'nationality' => null,
        'date_of_birth' => null,
        'metadata' => [
            'meta' => 'data'
        ],
        'employment' => null,
        'addresses' => [
            [
                'category' => '',
                'country' => 'ID',
                'state' => '-',
                'province' => 'DKI Jakarta',
                'city' => 'Jakarta Selatan',
                'postal_code' => '12345',
                'street_line1' => 'Jl. 123',
                'street_line2' => 'Jl. 456',
                'is_preferred' => false
            ]
        ],
        'source_of_wealth' => null
    ];

    const CUSTOMER_PARAMS_20201031 = [
        'reference_id' => 'test-ref-id',
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
        ]
    ];

    const CUSTOMER_RESPONSE_20201031 = [
        'type' => 'INDIVIDUAL',
        'email' => 'customer@website.com',
        'mobile_number' => '+6281212345678',
        'phone_number' => '+6289987654321',
        'created' => '2021-08-13T12:42:19.476Z',
        'updated' => '2021-08-13T12:42:19.476Z',
        'description' => 'test description',
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
        'id' => 'cust-db2b4ac3-518b-41bd-873a-4a64f7e18610',
        'reference_id' => 'test-ref-id',
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
                'role_description' => 'Employer',
                'nature_of_business' => 'Business'
            ]
        ],
        'business_detail' => null,
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
                    'currency' => 'IDR',
                    'account_number' => '12345',
                    'account_holder_name' => 'John Doe'
                ]
            ]
        ]
    ];

    const REFERENCE_ID = 'test-ref-id';

    const NEW_API_VERSION = array('api-version' => '2020-10-31');

    /**
     * Create customer test 2020-05-19 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerCreatable()
    {
        $params = self::CUSTOMER_PARAMS_20200519;

        $response = self::CUSTOMER_RESPONSE_20200519;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            [],
            $response
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test with mobile_number missing 2020-05-19 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerCreatableWithMobileNumberMissing()
    {
        $params = self::CUSTOMER_PARAMS_20200519;
        unset($params['mobile_number']);

        $response = self::CUSTOMER_RESPONSE_20200519;
        $response['mobile_number'] = null;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            [],
            $response
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test with email missing 2020-05-19 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerCreatableWithEmailMissing()
    {
        $params = self::CUSTOMER_PARAMS_20200519;
        unset($params['email']);

        $response = self::CUSTOMER_RESPONSE_20200519;
        $response['email'] = null;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            [],
            $response
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test with headers 2020-05-19 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerCreatableWithHeaders()
    {
        $params = array_merge(
            self::CUSTOMER_PARAMS_20200519,
            array('for-user-id' => 'user-id')
        );

        $response = self::CUSTOMER_RESPONSE_20200519;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            [],
            $response
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test 2020-05-19 version
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'reference_id' => self::REFERENCE_ID
        ];

        Customers::createCustomer($params);
    }

    /**
     * Get customer test 2020-05-19 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerGettable()
    {
        $response = [self::CUSTOMER_RESPONSE_20200519];

        $this->stubRequest(
            'get',
            '/customers?reference_id=' . self::REFERENCE_ID,
            [],
            [],
            $response
        );

        $result = Customers::getCustomerByReferenceID(
            self::REFERENCE_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Get customer test 2020-05-19 version
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20200519CustomerGettableThrowApiException()
    {

        $response = Customers::getCustomerByReferenceID(
            self::REFERENCE_ID
        );
        $this->assertEquals($response, []);
    }

    /**
     * Create customer test 2020-10-31 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20201031CustomerCreatable()
    {
        $params = self::CUSTOMER_PARAMS_20201031;

        $response = self::CUSTOMER_RESPONSE_20201031;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            self::NEW_API_VERSION,
            $response
        );

        $params = array_merge(
            $params,
            self::NEW_API_VERSION
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test with headers 2020-10-31 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20201031CustomerCreatableWithHeaders()
    {
        $params = array_merge(
            self::CUSTOMER_PARAMS_20201031,
            array('for-user-id' => 'user-id')
        );

        $response = self::CUSTOMER_RESPONSE_20201031;

        $this->stubRequest(
            'POST',
            '/customers',
            $params,
            self::NEW_API_VERSION,
            $response
        );

        $params = array_merge(
            $params,
            self::NEW_API_VERSION
        );

        $result = Customers::createCustomer($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create customer test 2020-10-31 version
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20201031CustomerCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'reference_id' => self::REFERENCE_ID,
            'api-version' => '2020-10-31'
        ];

        Customers::createCustomer($params);
    }

    /**
     * Get customer test 2020-10-31 version
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20201031CustomerGettable()
    {
        $response = [self::CUSTOMER_RESPONSE_20201031];

        $this->stubRequest(
            'get',
            '/customers?reference_id=' . self::REFERENCE_ID,
            [],
            self::NEW_API_VERSION,
            $response
        );

        $result = Customers::getCustomerByReferenceID(
            self::REFERENCE_ID,
            self::NEW_API_VERSION
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Get customer test 2020-10-31 version
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIs20201031CustomerGettableThrowApiException()
    {
        $response = [
            'data' => [],
            'has_more' => false
        ];

        $result = Customers::getCustomerByReferenceID(
            self::REFERENCE_ID,
            self::NEW_API_VERSION
        );
        $this->assertEquals($response, $result);
    }
}
