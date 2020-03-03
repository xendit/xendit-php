<?php

/**
 * VirtualAccountTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\VirtualAccounts;
use Xendit\TestCase;

/**
 * Class VirtualAccountTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class VirtualAccountTest extends TestCase
{
    const TEST_RESOURCE_ID = "123";

    /**
     * Create VA test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id' => 'VA_fixed-12341234',
            'bank_code' => 'MANDIRI',
            'name' => 'Steve Wozniak'
        ];

        $this->stubRequest(
            'POST',
            '/callback_virtual_accounts',
            $params,
            [],
            $params
        );

        $resource = VirtualAccounts::create($params);
        $this->assertEquals($resource['external_id'], $params['external_id']);
        $this->assertEquals($resource['bank_code'], $params['bank_code']);
        $this->assertEquals($resource['name'], $params['name']);
    }

    /**
     * Get VirtualAccountBanks test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testVABanksIsGettable()
    {
        $expectedResponse = [[
            'name' => 'Bank Mandiri',
            'code' => 'MANDIRI'
        ]];
        $this->stubRequest(
            'GET',
            '/available_virtual_account_banks',
            [],
            [],
            $expectedResponse
        );

        $resource = VirtualAccounts::getVABanks();
        $this->assertEquals($resource[0]['name'], $expectedResponse[0]['name']);
        $this->assertEquals($resource[0]['code'], $expectedResponse[0]['code']);
    }

    /**
     * Get VirtualAccount test
     * Should pass
     *
     * @return void
     */
    public function testVAIsGettable()
    {
        $this->stubRequest(
            'GET',
            '/callback_virtual_accounts/'.self::TEST_RESOURCE_ID,
            [],
            [],
            [
                'id' => self::TEST_RESOURCE_ID
            ]
        );

        $resource = VirtualAccounts::retrieve(self::TEST_RESOURCE_ID);
        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }

    /**
     * Update VA test
     * Should pass
     *
     * @return void
     */
    public function testIsUpdateable()
    {
        $params = [
            'suggested_amount' => 10000
        ];

        $this->stubRequest(
            'PATCH',
            '/callback_virtual_accounts/'.self::TEST_RESOURCE_ID,
            $params,
            [],
            [
                'id' => self::TEST_RESOURCE_ID,
                'suggested_amount' => 10000
            ]
        );

        $resource = VirtualAccounts::update(self::TEST_RESOURCE_ID, $params);

        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }

    /**
     * Get FVA Payment test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableFVAPayment()
    {
        $this->stubRequest(
            'GET',
            '/callback_virtual_account_payments/payment_id='.self::TEST_RESOURCE_ID,
            [],
            [],
            [
                'id' => self::TEST_RESOURCE_ID
            ]
        );

        $resource = VirtualAccounts::getFVAPayment(self::TEST_RESOURCE_ID);
        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }

    /**
     * Create VirtualAccount test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270'
        ];

        VirtualAccounts::create($params);
    }

    /**
     * Get VirtualAccount test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsVAGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        VirtualAccounts::retrieve(self::TEST_RESOURCE_ID);
    }

    /**
     * Create VirtualAccount test
     * Should throw
     *
     * @return void
     */
    public function testIsUpdateableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        VirtualAccounts::update(self::TEST_RESOURCE_ID);
    }

    /**
     * Get FVAPayment test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsFVAPaymentGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        VirtualAccounts::getFVAPayment(self::TEST_RESOURCE_ID);
    }
}
