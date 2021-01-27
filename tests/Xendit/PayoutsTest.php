<?php

/**
 * PayoutsTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Payouts;
use Xendit\TestCase;

/**
 * Class PayoutsTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PayoutsTest extends TestCase
{
    const TEST_ID = "TEST-123";

    /**
     * Create Payout test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id'=> 'payouts-123456789',
            'amount'=> 50000,
            'email'=> 'demo@xendit.co',
        ];

        $this->stubRequest(
            'POST',
            '/payouts',
            $params,
            [],
            $params
        );

        $result = Payouts::create($params);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['email'], $params['email']);
    }

    /**
     * Get Payout test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $params = [
            'external_id'=> 'payouts-123456789',
            'amount'=> 50000
        ];

        $this->stubRequest(
            'GET',
            '/payouts/' . self::TEST_ID,
            [],
            [],
            $params
        );

        $result = Payouts::retrieve(self::TEST_ID);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['amount'], $params['amount']);
    }

    /**
     * Void Payout test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsVoidable()
    {
        $this->stubRequest(
            'POST',
            '/payouts/' . self::TEST_ID . '/void',
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = Payouts::void(self::TEST_ID);

        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Create Payout test
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

        Payouts::create($params);
    }

    /**
     * Get Payout test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Payouts::retrieve(self::TEST_ID);
    }

    /**
     * Void Payout test
     * Should throw
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsVoidableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Payouts::void(self::TEST_ID);
    }
}
