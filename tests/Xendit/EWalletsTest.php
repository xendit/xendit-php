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
    const TEST_RESOURCE_ID = "123";
    const TEST_RESOURCE_TYPE = "DANA";

    /**
     * Create EWallet test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiExceptions
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
            'ewallet_type' => 'DANA'
        ];

        $this->stubRequest(
            'POST',
            '/ewallets',
            $params,
            [],
            $params
        );

        $resource = EWallets::create($params);

        $this->assertEquals($resource['external_id'], $params['external_id']);
        $this->assertEquals($resource['phone'], $params['phone']);
        $this->assertEquals($resource['ewallet_type'], $params['ewallet_type']);
        $this->assertEquals($resource['amount'], $params['amount']);
        $this->assertEquals($resource['callback_url'], $params['callback_url']);
        $this->assertEquals($resource['redirect_url'], $params['redirect_url']);
        $this->assertEquals(
            $resource['expiration_date'],
            $params['expiration_date']
        );
    }

    /**
     * Get EWallets Payment test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiExceptions
     */
    public function testIsGettable()
    {
        $params = [
            'external_id' => self::TEST_RESOURCE_ID,
            'amount' => 32000,
            'phone' => '081298498259',
            'expiration_date' => '2020-02-20T00:00:00.000Z',
            'callback_url' => 'https://my-shop.com/callbacks',
            'redirect_url' => 'https://my-shop.com/home',
            'ewallet_type' => 'DANA'
        ];

        $this->stubRequest(
            'get',
            '/ewallets?external_id='.self::TEST_RESOURCE_ID.
            '&ewallet_type='.self::TEST_RESOURCE_TYPE,
            [],
            [],
            $params
        );

        $resource = EWallets::getPaymentStatus(
            self::TEST_RESOURCE_ID,
            self::TEST_RESOURCE_TYPE
        );

        $this->assertEquals($resource['ewallet_type'], self::TEST_RESOURCE_TYPE);
    }

    /**
     * Create EWallets test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws Exceptions\ApiExceptions
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
     * @throws Exceptions\ApiExceptions
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiExceptions::class);

        EWallets::getPaymentStatus(self::TEST_RESOURCE_ID, self::TEST_RESOURCE_TYPE);
    }
}
