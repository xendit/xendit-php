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
    const TEST_RESOURCE_TYPE = "OVO";

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
            'ewallet_type' => 'OVO'
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
    }

    /**
     * Get Invoice test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $this->stubRequest(
            'get',
            '/v2/invoices/'.self::TEST_RESOURCE_ID,
            [],
            [],
            [
                'id' => self::TEST_RESOURCE_ID
            ]
        );

        $resource = Invoice::retrieve(self::TEST_RESOURCE_ID);
        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }

    /**
     * Create Invoice test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270',
            'payer_email' => 'sample_email@xendit.co',
            'description' => 'Trip to Bali',
        ];

        Invoice::create($params);
    }

    /**
     * Get Invoice test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiExceptions::class);

        Invoice::retrieve(self::TEST_RESOURCE_ID);
    }
}
