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
    const CUSTOMER_PARAMS = [
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

    const CUSTOMER_RESPONSE = [
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

    const REFERENCE_ID = 'test-ref-id';

    /**
     * Create customer test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerCreatable()
    {
        $params = self::CUSTOMER_PARAMS;

        $response = self::CUSTOMER_RESPONSE;

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
     * Create customer test with mobile_number missing
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerCreatableWithMobileNumberMissing()
    {
        $params = self::CUSTOMER_PARAMS;
        unset($params['mobile_number']);

        $response = self::CUSTOMER_RESPONSE;
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
     * Create customer test with email missing
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerCreatableWithEmailMissing()
    {
        $params = self::CUSTOMER_PARAMS;
        unset($params['email']);

        $response = self::CUSTOMER_RESPONSE;
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
     * Create customer test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerCreatableWithHeaders()
    {
        $params = array_merge(
            self::CUSTOMER_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::CUSTOMER_RESPONSE;

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
     * Create customer test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'reference_id' => self::REFERENCE_ID
        ];

        Customers::createCustomer($params);
    }

    /**
     * Get customer test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerGettable()
    {
        $response = [self::CUSTOMER_RESPONSE];

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
     * Get customer test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCustomerGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Customers::getCustomerByReferenceID(
            self::REFERENCE_ID
        );
    }
}
