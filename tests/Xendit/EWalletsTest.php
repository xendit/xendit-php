<?php

/**
 * EWalletsTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\EWallets;
use Xendit\TestCase;

/**
 * Class EWalletsTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class EWalletsTest extends TestCase
{
    const TEST_ID = "123";
    const TEST_TYPE = "DANA";
    const TEST_CHARGE_ID = "ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c";

    /**
     * Create EWallet test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id' => 'demo_' . time(),
            'amount' => 32000,
            'phone' => '081298498259',
            'expiration_date' => '2020-02-20T00:00:00.000Z',
            'callback_url' => 'https://my-shop.com/callbacks',
            'redirect_url' => 'https://my-shop.com/home',
            'ewallet_type' => 'DANA',
        ];

        $this->stubRequest(
            'POST',
            '/ewallets',
            $params,
            [],
            $params
        );

        $result = EWallets::create($params);

        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['phone'], $params['phone']);
        $this->assertEquals(
            $result['ewallet_type'],
            $params['ewallet_type']
        );
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals(
            $result['callback_url'],
            $params['callback_url']
        );
        $this->assertEquals(
            $result['redirect_url'],
            $params['redirect_url']
        );
        $this->assertEquals(
            $result['expiration_date'],
            $params['expiration_date']
        );
    }

    /**
     * Create EWallet test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCreatableWithApiVersion()
    {
        $params = [
            'external_id' => 'demo_' . time(),
            'amount' => 32000,
            'phone' => '081298498259',
            'expiration_date' => '2020-02-20T00:00:00.000Z',
            'callback_url' => 'https://my-shop.com/callbacks',
            'redirect_url' => 'https://my-shop.com/home',
            'ewallet_type' => 'OVO',
            'x-api-version' => '2019-02-04',
        ];

        $this->stubRequest(
            'POST',
            '/ewallets',
            $params,
            [],
            $params
        );

        $result = EWallets::create($params);

        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['phone'], $params['phone']);
        $this->assertEquals(
            $result['ewallet_type'],
            $params['ewallet_type']
        );
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals(
            $result['callback_url'],
            $params['callback_url']
        );
        $this->assertEquals(
            $result['redirect_url'],
            $params['redirect_url']
        );
        $this->assertEquals(
            $result['expiration_date'],
            $params['expiration_date']
        );
    }

    /**
     * Get EWallets Payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsGettable()
    {
        $params = [
            'external_id' => self::TEST_ID,
            'amount' => 32000,
            'phone' => '081298498259',
            'expiration_date' => '2020-02-20T00:00:00.000Z',
            'callback_url' => 'https://my-shop.com/callbacks',
            'redirect_url' => 'https://my-shop.com/home',
            'ewallet_type' => 'DANA'
        ];

        $this->stubRequest(
            'get',
            '/ewallets?external_id='.self::TEST_ID.
            '&ewallet_type='.self::TEST_TYPE,
            [],
            [],
            $params
        );

        $result = EWallets::getPaymentStatus(
            self::TEST_ID,
            self::TEST_TYPE
        );

        $this->assertEquals(
            $result['ewallet_type'],
            self::TEST_TYPE
        );
    }

    /**
     * Create EWallets test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270'
        ];

        EWallets::create($params);
    }

    /**
     * Get EWallets Payment test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        EWallets::getPaymentStatus(
            self::TEST_ID,
            self::TEST_TYPE
        );
    }

    /**
     * Create EWallet Charge test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsEWalletChargeCreatable()
    {
        $params = [
            'reference_id' => 'test-reference-id',
            'currency' => 'IDR',
            'amount' => 50000,
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'channel_code' => 'ID_SHOPEEPAY',
            'channel_properties' => [
                'success_redirect_url' => 'https://yourwebsite.com/order/123',
            ],
            'metadata' => [
                'meta' => 'data'
            ]
        ];

        $this->stubRequest(
            'POST',
            '/ewallets/charges',
            $params,
            [],
            $params
        );

        $result = EWallets::createEWalletCharge($params);

        $this->assertEquals($result['reference_id'], $params['reference_id']);
        $this->assertEquals($result['currency'], $params['currency']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals(
            $result['checkout_method'],
            $params['checkout_method']
        );
        $this->assertEquals(
            $result['channel_code'],
            $params['channel_code']
        );
        $this->assertEquals(
            $result['channel_properties'],
            $params['channel_properties']
        );
        $this->assertEquals(
            $result['metadata'],
            $params['metadata']
        );
    }

    /**
     * Create EWallet Charge test with headers
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsEWalletChargeCreatableWithHeaders()
    {
        $params = [
            'reference_id' => 'test-reference-id',
            'currency' => 'IDR',
            'amount' => 50000,
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'channel_code' => 'ID_SHOPEEPAY',
            'channel_properties' => [
                'success_redirect_url' => 'https://yourwebsite.com/order/123',
            ],
            'metadata' => [
                'meta' => 'data'
            ],
            'for-user-id' => 'user-id',
            'with-fee-rule' => 'fee-rule'
        ];

        $this->stubRequest(
            'POST',
            '/ewallets/charges',
            $params,
            [],
            $params
        );

        $result = EWallets::createEWalletCharge($params);

        $this->assertEquals($result['reference_id'], $params['reference_id']);
        $this->assertEquals($result['currency'], $params['currency']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals(
            $result['checkout_method'],
            $params['checkout_method']
        );
        $this->assertEquals(
            $result['channel_code'],
            $params['channel_code']
        );
        $this->assertEquals(
            $result['channel_properties'],
            $params['channel_properties']
        );
        $this->assertEquals(
            $result['metadata'],
            $params['metadata']
        );
    }

    /**
     * Create EWallets Charge test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsEWalletChargeCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'reference_id' => 'test-ref-id'
        ];

        EWallets::createEWalletCharge($params);
    }

    /**
     * Get EWallets Charge Status test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsEWalletChargeGettable()
    {
        $params = [
            'id' => self::TEST_CHARGE_ID,
            'business_id' => 'business_id_example',
            'reference_id' => self::TEST_ID,
            'status' => 'PENDING',
            'currency' => 'IDR',
            'charge_amount' => 50000,
            'capture_amount' => 50000,
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'channel_code' => 'ID_SHOPEEPAY',
            'channel_properties' => [
                'success_redirect_url' => 'https://yourwebsite.com/order/123'
            ],
            'actions' => [
                'desktop_web_checkout_url' => null,
                'mobile_web_checkout_url' => null,
                'mobile_deeplink_checkout_url' =>
                'https://mobile.deeplink.checkout.url',
                'qr_checkout_string' => 'test-qr-string'
            ],
            'is_redirect_required' => true,
            'callback_url' => 'https://yourwebsite.com/order/123',
            'created' => '2021-02-09T06:22:35.064408Z',
            'updated' => '2021-02-09T06:22:35.064408Z',
            'voided_at' => null,
            'capture_now' => true,
            'customer_id' => null,
            'payment_method_id' => null,
            'failure_code' => null,
            'basket' => null,
            'metadata' => null
        ];

        $this->stubRequest(
            'get',
            '/ewallets/charges/'.self::TEST_CHARGE_ID,
            [],
            [],
            $params
        );

        $result = EWallets::getEWalletChargeStatus(
            self::TEST_CHARGE_ID
        );

        $this->assertEquals(
            $result['id'],
            self::TEST_CHARGE_ID
        );
    }

    /**
     * Get EWallets Charge Status test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsEWalletChargeGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        EWallets::getEWalletChargeStatus(
            self::TEST_CHARGE_ID
        );
    }
}
