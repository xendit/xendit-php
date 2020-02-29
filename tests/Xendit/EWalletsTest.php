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
            'ewallet_type' => 'DANA'
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
}
