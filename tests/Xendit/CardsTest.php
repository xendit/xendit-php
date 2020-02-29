<?php

/**
 * CardsTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Cards;
use Xendit\TestCase;

/**
 * Class CardsTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class CardsTest extends TestCase
{
    const TOKEN_ID = "token123";
    const AUTH_ID = "auth123";
    const CHARGE_ID = "charge123";

    /**
     * Create Charge test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $expected = [
            'token_id' => self::TOKEN_ID,
            'external_id' => 'card_' . time(),
            'authentication_id' => self::AUTH_ID,
            'amount'=> 100000,
            'card_cvn'=>'123',
            'capture'=> false
        ];

        $this->stubRequest(
            'POST',
            '/credit_card_charges',
            $expected,
            [],
            $expected
        );

        $result = Cards::create($expected);

        $this->assertEquals($result['token_id'], $expected['token_id']);
        $this->assertEquals($result['external_id'], $expected['external_id']);
        $this->assertEquals(
            $result['authentication_id'],
            $expected['authentication_id']
        );
        $this->assertEquals($result['amount'], $expected['amount']);
        $this->assertEquals($result['card_cvn'], $expected['card_cvn']);
        $this->assertEquals($result['capture'], $expected['capture']);
    }

    /**
     * Get Charge test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $expected = [
            'token_id' => self::TOKEN_ID,
            'authentication_id' => self::AUTH_ID,
        ];

        $this->stubRequest(
            'get',
            '/credit_card_charges/' . self::CHARGE_ID,
            [],
            [],
            $expected
        );

        $result = Cards::retrieve(
            self::CHARGE_ID
        );

        $this->assertEquals(
            $result['token_id'],
            self::TOKEN_ID
        );

        $this->assertEquals(
            $result['authentication_id'],
            self::AUTH_ID
        );
    }

    /**
     * Capture charge test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCaptureable()
    {
        $expected = [
            'amount'=> 100000
        ];

        $this->stubRequest(
            'POST',
            '/credit_card_charges/' . self::CHARGE_ID . '/capture',
            $expected,
            [],
            $expected
        );

        $result = Cards::capture(self::CHARGE_ID, $expected);

        $this->assertEquals($result['amount'], $expected['amount']);
    }

    /**
     * Get refund charge test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsRefundable()
    {
        $expected = [
            'amount'=> 100000,
            'external_id' => 'card_' . time(),
        ];

        $this->stubRequest(
            'POST',
            '/credit_card_charges/' . self::CHARGE_ID . '/refunds',
            $expected,
            [],
            $expected
        );

        $result = Cards::createRefund(self::CHARGE_ID, $expected);

        $this->assertEquals($result['amount'], $expected['amount']);
        $this->assertEquals($result['external_id'], $expected['external_id']);
    }

    /**
     * Reverse charge test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsReversable()
    {
        $expected = [
            'external_id' => 'card_' . time()
        ];

        $this->stubRequest(
            'POST',
            '/credit_card_charges/' . self::CHARGE_ID . '/auth_reversal',
            $expected,
            [],
            $expected
        );

        $result = Cards::reverseAuthorization(self::CHARGE_ID, $expected);

        $this->assertEquals($result['external_id'], $expected['external_id']);
    }

    /**
     * Create Charge test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testIsCreatableThrowsException()
    {
        $expected = [
            'token_id' => self::TOKEN_ID
        ];

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $result = Cards::create($expected);
    }

    /**
     * Get Charge test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Cards::retrieve(self::CHARGE_ID);
    }

    /**
     * Capture charge test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsCaptureableThrowException()
    {
        $params = [
            'amount'=> 100000
        ];

        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Cards::capture(self::CHARGE_ID, $params);
    }

    /**
     * Get refund charge test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsRefundableThrowException()
    {
        $params = [
            'amount'=> 100000,
            'external_id' => 'card_' . time(),
        ];

        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Cards::createRefund(self::CHARGE_ID, $params);
    }

    /**
     * Reverse charge test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsReversableThrowException()
    {
        $params = [
            'external_id' => 'card_' . time()
        ];

        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Cards::reverseAuthorization(self::CHARGE_ID, $params);
    }
}
