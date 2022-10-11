<?php

/**
 * DirectDebitTest.php
 * php version 7.4.3
 *
 * @category Test
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\DirectDebit;
use Xendit\TestCase;

/**
 * Class DirectDebitTest
 *
 * @category Class
 * @package  Xendit
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DirectDebitTest extends TestCase
{
    const INITIALIZED_LINKED_ACCOUNT_PARAMS = [
        'customer_id' => '6778b829-1936-4c4a-a321-9a0178840571',
        'channel_code' => 'DC_BRI',
        'properties' => [
            'account_mobile_number' => '+62818555988',
            'card_last_four' => '8888',
            'card_expiry' => '06/24',
            'account_email' => 'test.email@xendit.co'
        ],
        'metadata' => [
            'meta' => 'data'
        ]
    ];

    const INITIALIZED_LINKED_ACCOUNT_RESPONSE = [
        'id' => 'lat-f9dc34e7-153a-444e-b337-cd2599e7f670',
        'customer_id' => '6778b829-1936-4c4a-a321-9a0178840571',
        'channel_code' => 'DC_BRI',
        'status' => 'PENDING',
        'authorizer_url' => null,
        'metadata' => [
            'meta' => 'data'
        ],
    ];

    const TOKEN_ID = 'lat-f9dc34e7-153a-444e-b337-cd2599e7f670';

    const VALIDATED_LINKED_ACCOUNT_PARAMS = [
        'otp_code' => '333000'
    ];

    const VALIDATED_LINKED_ACCOUNT_RESPONSE = [
        'id' => self::TOKEN_ID,
        'customer_id' => '6778b829-1936-4c4a-a321-9a0178840571',
        'channel_code' => 'DC_BRI',
        'status' => 'SUCCESS',
        'metadata' => [
            'meta' => 'data'
        ],
    ];

    const ACCESSIBLE_ACCOUNT_RESPONSE = [
        [
            'channel_code' => 'DC_BRI',
            'id' => 'la-3a1b4458-9f5b-4dfd-8250-f6c3f41f5240',
            'properties' => [
                'card_expiry' => '06/24',
                'card_last_four' => '8888',
                'currency' => 'IDR',
                'description' => ''
            ],
            'type' => 'DEBIT_CARD'
        ]
    ];

    const UNBINDED_LINKED_ACCOUNT_RESPONSE = [
        'id' => self::TOKEN_ID,
        'is_deleted' =>  true
    ];

    const PAYMENT_METHOD_PARAMS = [
        'customer_id' => '6778b829-1936-4c4a-a321-9a0178840571',
        'type' => 'DEBIT_CARD',
        'properties' => [
            'id' => 'la-55048b41-a7ab-4799-9f33-6ec5cc078db0'
        ],
        'metadata' => [
            'meta' => 'data'
        ]
    ];

    const PAYMENT_METHOD_RESPONSE = [
        'id' => 'pm-ebb1c863-c7b5-4f20-b116-b3071b1d3aef',
        'customer_id' => '4b7b6050-0830-440a-903b-37d527dbbaa9',
        'type' => 'DEBIT_CARD',
        'status' => 'ACTIVE',
        'properties' => [
            'id' => 'la-55048b41-a7ab-4799-9f33-6ec5cc078db0',
            'currency' => 'IDR',
            'card_expiry' => '11/23',
            'description' => '',
            'channel_code' => 'DC_BRI',
            'card_last_four' => '8888'
        ],
        'metadata' => [
            'meta' => 'data'
        ],
        'created' => '2021-07-15T03:17:53.989Z',
        'updated' => '2021-07-15T03:17:53.989Z'
    ];

    const CUSTOMER_ID = '4b7b6050-0830-440a-903b-37d527dbbaa9';

    const DIRECT_DEBIT_PAYMENT_PARAMS = [
        'reference_id' => 'test-ref-id',
        'payment_method_id' => 'pm-ebb1c863-c7b5-4f20-b116-b3071b1d3aef',
        'currency' => 'IDR',
        'amount' => 15000,
        'callback_url' => 'http://webhook.site/',
        'enable_otp' => true,
        'description' => 'test description',
        'basket' => [
            [
                'reference_id' => 'basket-product-ref-id',
                'name' => 'product name',
                'category' => 'mechanics',
                'market' => 'ID',
                'price' => 50000,
                'quantity' => 5,
                'type' => 'product type',
                'sub_category' => 'product sub category',
                'category' => 'product category',
                'description' => 'product description',
                'url' => 'http://product.url'
            ]
        ],
        'success_redirect_url' => 'https://success-redirect.url',
        'failure_redirect_url' => 'https://failure-redirect.url',
        'device' => [
            'id' => 'device-id',
            'ip_address' => '0.0.0.0',
            'user_agent' => 'user-agent',
            'ad_id' => 'ad-id',
            'imei' => '123a456b789c'
        ],
        'metadata' => [
            'meta' => 'data'
        ],
        'Idempotency-key' => 'idempotency-keyy'
    ];

    const DIRECT_DEBIT_PAYMENT_RESPONSE = [
        'id' => 'ddpy-7e61b0a7-92f9-4762-a994-c2936306f44c',
        'reference_id' => 'test-ref-id',
        'payment_method_id' => 'pm-ebb1c863-c7b5-4f20-b116-b3071b1d3aef',
        'channel_code' => 'DC_BRI',
        'currency' => 'IDR',
        'amount' => 15000,
        'is_otp_required' => true,
        'basket' => [
            [
                'reference_id' => 'basket-product-ref-id',
                'name' => 'product name',
                'category' => 'mechanics',
                'market' => 'ID',
                'price' => 50000,
                'quantity' => 5,
                'type' => 'product type',
                'sub_category' => 'product sub category',
                'category' => 'product category',
                'description' => 'product description',
                'url' => 'http://product.url'
            ]
        ],
        'description' => 'test description',
        'status' => 'PENDING',
        'callback_url' => 'http://webhook.site/',
        'enable_otp' => true,
        'metadata' => [
            'meta' => 'data'
        ],
        'created' => '2021-07-16T02:19:07.277466Z',
        'updated' => '2021-07-16T02:19:07.277466Z',
        'device' => [
            'id' => 'device-id',
            'ip_address' => '0.0.0.0',
            'user_agent' => 'user-agent',
            'ad_id' => 'ad-id',
            'imei' => '123a456b789c'
        ],
        'refunded_amount' => 0,
        'refunds' => [
            'data' => [
                'a1b', 'c2d', 'e3f', 'g4h'
            ],
            'has_more' => false,
            'url' => 'https://ref.unds'
        ],
        'failure_code' => 'failure-code',
        'otp_mobile_number' => '+6281234567890',
        'otp_expiration_timestamp' => '2100-07-16T02:19:07.277466Z',
        'success_redirect_url' => 'https://success-redirect.url',
        'checkout_url' => 'https://checkout.url',
        'failure_redirect_url' => 'https://failure-redirect.url',
        'required_action' => 'VALIDATE_OTP'
    ];

    const VALIDATED_DIRECT_DEBIT_PAYMENT_RESPONSE = [
        'id' => 'ddpy-7e61b0a7-92f9-4762-a994-c2936306f44c',
        'reference_id' => 'test-ref-id',
        'payment_method_id' => 'pm-ebb1c863-c7b5-4f20-b116-b3071b1d3aef',
        'channel_code' => 'DC_BRI',
        'currency' => 'IDR',
        'amount' => 15000,
        'is_otp_required' => true,
        'basket' => [
            [
                'reference_id' => 'basket-product-ref-id',
                'name' => 'product name',
                'category' => 'mechanics',
                'market' => 'ID',
                'price' => 50000,
                'quantity' => 5,
                'type' => 'product type',
                'sub_category' => 'product sub category',
                'category' => 'product category',
                'description' => 'product description',
                'url' => 'http://product.url'
            ]
        ],
        'description' => 'test description',
        'status' => 'COMPLETED',
        'callback_url' => 'http://webhook.site/',
        'enable_otp' => true,
        'metadata' => [
            'meta' => 'data'
        ],
        'created' => '2021-07-16T02:19:07.277466Z',
        'updated' => '2021-07-16T02:19:07.277466Z',
        'device' => [
            'id' => 'device-id',
            'ip_address' => '0.0.0.0',
            'user_agent' => 'user-agent',
            'ad_id' => 'ad-id',
            'imei' => '123a456b789c'
        ],
        'refunded_amount' => 0,
        'refunds' => [
            'data' => [
                'a1b', 'c2d', 'e3f', 'g4h'
            ],
            'has_more' => false,
            'url' => 'https://ref.unds'
        ],
        'failure_code' => 'failure-code',
        'otp_mobile_number' => '+6281234567890',
        'otp_expiration_timestamp' => '2100-07-16T02:19:07.277466Z',
        'success_redirect_url' => 'https://success-redirect.url',
        'checkout_url' => 'https://checkout.url',
        'failure_redirect_url' => 'https://failure-redirect.url',
        'required_action' => 'VALIDATE_OTP'
    ];

    const DIRECT_DEBIT_PAYMENT_ID = 'ddpy-7e61b0a7-92f9-4762-a994-c2936306f44c';

    const VALIDATED_DIRECT_DEBIT_PAYMENT_PARAMS = [
        'otp_code' => '222000'
    ];

    const REFERENCE_ID = 'test-ref-id';

    /**
     * Initialize linked account tokenization test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountTokenizationInitializable()
    {
        $params = self::INITIALIZED_LINKED_ACCOUNT_PARAMS;

        $response = self::INITIALIZED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/linked_account_tokens/auth',
            $params,
            [],
            $response
        );

        $result = DirectDebit::initializeLinkedAccountTokenization($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Initialize linked account tokenization with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountTokenizationInitializableWithHeaders()
    {
        $params = array_merge(
            self::INITIALIZED_LINKED_ACCOUNT_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::INITIALIZED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/linked_account_tokens/auth',
            $params,
            [],
            $response
        );

        $result = DirectDebit::initializeLinkedAccountTokenization($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Initialize linked account tokenization test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountTokenizationInitializableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        $params = self::INITIALIZED_LINKED_ACCOUNT_PARAMS;

        DirectDebit::initializeLinkedAccountTokenization($params);
    }

    /**
     * Validate OTP for linked account test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountOTPValidatable()
    {
        $params = self::VALIDATED_LINKED_ACCOUNT_PARAMS;

        $response = self::VALIDATED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/linked_account_tokens/' . self::TOKEN_ID . '/validate_otp',
            $params,
            [],
            $response
        );

        $result = DirectDebit::validateOTPForLinkedAccount(
            self::TOKEN_ID,
            $params
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Validate OTP for linked account test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountOTPValidatableWithHeaders()
    {
        // $token_id = 'lat-f9dc34e7-153a-444e-b337-cd2599e7f670';

        $params = array_merge(
            self::VALIDATED_LINKED_ACCOUNT_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::VALIDATED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/linked_account_tokens/' . self::TOKEN_ID . '/validate_otp',
            $params,
            [],
            $response
        );

        $result = DirectDebit::validateOTPForLinkedAccount(
            self::TOKEN_ID,
            $params
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Validate OTP for linked account test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountOTPValidatableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        // $token_id = 'lat-f9dc34e7-153a-444e-b337-cd2599e7f670';

        $params = self::VALIDATED_LINKED_ACCOUNT_PARAMS;

        DirectDebit::validateOTPForLinkedAccount(
            self::TOKEN_ID,
            $params
        );
    }

    /**
     * Retrieve accessible linked accounts test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsAccessibleLinkedAccountRetrievable()
    {
        $response = self::ACCESSIBLE_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'GET',
            '/linked_account_tokens/' . self::TOKEN_ID . '/accounts',
            [],
            [],
            $response
        );

        $result = DirectDebit::retrieveAccessibleLinkedAccounts(
            self::TOKEN_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Retrieve accessible linked accounts test
     * Should throw apiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsAccessibleLinkedAccountRetrievableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        DirectDebit::retrieveAccessibleLinkedAccounts(
            self::TOKEN_ID
        );
    }

    /**
     * Unbind linked account token test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountTokenUnbindable()
    {
        $response = self::UNBINDED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'DELETE',
            '/linked_account_tokens/' . self::TOKEN_ID,
            [],
            [],
            $response
        );

        $result = DirectDebit::unbindLinkedAccountToken(
            self::TOKEN_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Unbind linked account token test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountUnbindableWithHeaders()
    {
        $params = [
            'for-user-id' => 'user-id'
        ];

        $response = self::UNBINDED_LINKED_ACCOUNT_RESPONSE;

        $this->stubRequest(
            'DELETE',
            '/linked_account_tokens/' . self::TOKEN_ID,
            [],
            [],
            $response
        );

        $result = DirectDebit::unbindLinkedAccountToken(
            self::TOKEN_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Unbind linked account test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsLinkedAccountUnbindableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        DirectDebit::unbindLinkedAccountToken(
            self::TOKEN_ID
        );
    }

    /**
     * Create payment method test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPaymentMethodCreatable()
    {
        $params = self::PAYMENT_METHOD_PARAMS;

        $response = self::PAYMENT_METHOD_RESPONSE;

        $this->stubRequest(
            'POST',
            '/payment_methods',
            $params,
            [],
            $response
        );

        $result = DirectDebit::createPaymentMethod($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create payment method test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPaymentMethodCreatableWithHeaders()
    {
        $params = array_merge(
            self::PAYMENT_METHOD_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::PAYMENT_METHOD_RESPONSE;

        $this->stubRequest(
            'POST',
            '/payment_methods',
            $params,
            [],
            $response
        );

        $result = DirectDebit::createPaymentMethod($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create payment method test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPaymentMethodCreatableThrowApiException()
    {
        // $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        $params = self::PAYMENT_METHOD_PARAMS;

        DirectDebit::createPaymentMethod($params);
    }

    /**
     * Get payment method test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPaymentMethodGettable()
    {
        $response = [self::PAYMENT_METHOD_RESPONSE];

        $this->stubRequest(
            'GET',
            '/payment_methods?customer_id=' . self::CUSTOMER_ID,
            [],
            [],
            $response
        );

        $result = DirectDebit::getPaymentMethodsByCustomerID(
            self::CUSTOMER_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Get payment method test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPaymentMethodGettableButNotFound()
    {
        $result = DirectDebit::getPaymentMethodsByCustomerID(self::CUSTOMER_ID);
        $this->assertEquals($result, []);
    }

    /**
     * Create direct debit payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentCreatable()
    {
        $params = self::DIRECT_DEBIT_PAYMENT_PARAMS;

        $response = self::DIRECT_DEBIT_PAYMENT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/direct_debits',
            $params,
            [],
            $response
        );

        $result = DirectDebit::createDirectDebitPayment($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create direct debit payment test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentCreatableWithHeaders()
    {
        $params = array_merge(
            self::DIRECT_DEBIT_PAYMENT_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::DIRECT_DEBIT_PAYMENT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/direct_debits',
            $params,
            [],
            $response
        );

        $result = DirectDebit::createDirectDebitPayment($params);

        $this->assertEquals($response, $result);
    }

    /**
     * Create direct debit payment test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentCreatableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        $params = self::DIRECT_DEBIT_PAYMENT_PARAMS;

        DirectDebit::createDirectDebitPayment($params);
    }

    /**
     * Validate OTP for direct debit payment
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentOTPValidatable()
    {
        $params = self::VALIDATED_DIRECT_DEBIT_PAYMENT_PARAMS;

        $response = self::VALIDATED_DIRECT_DEBIT_PAYMENT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/direct_debits/' . self::DIRECT_DEBIT_PAYMENT_ID . '/validate_otp/',
            $params,
            [],
            $response
        );

        $result = DirectDebit::validateOTPForDirectDebitPayment(
            self::DIRECT_DEBIT_PAYMENT_ID,
            $params
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Validate OTP for direct debit payment test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentOTPValidatableWithHeaders()
    {
        $params = array_merge(
            self::VALIDATED_DIRECT_DEBIT_PAYMENT_PARAMS,
            array('for-user-id' => 'user-id')
        );

        $response = self::VALIDATED_DIRECT_DEBIT_PAYMENT_RESPONSE;

        $this->stubRequest(
            'POST',
            '/direct_debits/' . self::DIRECT_DEBIT_PAYMENT_ID . '/validate_otp/',
            $params,
            [],
            $response
        );

        $result = DirectDebit::validateOTPForDirectDebitPayment(
            self::DIRECT_DEBIT_PAYMENT_ID,
            $params
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Validate OTP for direct debit payment test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentValidatableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $params = self::VALIDATED_DIRECT_DEBIT_PAYMENT_PARAMS;

        DirectDebit::validateOTPForDirectDebitPayment(
            self::DIRECT_DEBIT_PAYMENT_ID,
            $params
        );
    }

    /**
     * Get direct debit payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentGettableByID()
    {
        $response = self::VALIDATED_DIRECT_DEBIT_PAYMENT_RESPONSE;

        $this->stubRequest(
            'GET',
            '/direct_debits/' . self::DIRECT_DEBIT_PAYMENT_ID . '/',
            [],
            [],
            $response
        );

        $result = DirectDebit::getDirectDebitPaymentByID(
            self::DIRECT_DEBIT_PAYMENT_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Get direct debit payment test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentGettableByIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        DirectDebit::getDirectDebitPaymentByID(self::DIRECT_DEBIT_PAYMENT_ID);
    }

    /**
     * Get direct debit payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentGettableByReferenceID()
    {
        $response = [self::VALIDATED_DIRECT_DEBIT_PAYMENT_RESPONSE];

        $this->stubRequest(
            'GET',
            '/direct_debits?reference_id=' . self::REFERENCE_ID,
            [],
            [],
            $response
        );

        $result = DirectDebit::getDirectDebitPaymentByReferenceID(
            self::REFERENCE_ID
        );

        $this->assertEquals($response, $result);
    }

    /**
     * Get direct debit payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsDirectDebitPaymentGettableByReferenceIDButNotFound()
    {
        $result = DirectDebit::getDirectDebitPaymentByReferenceID(
            self::REFERENCE_ID
        );
        $this->assertEquals($result, []);
    }
}
