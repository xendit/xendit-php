<?php

/**
 * Platform.php
 * php version 7.4.0
 *
 * @category Test
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Platform;
use Xendit\TestCase;

/**
 * Class PlatformTest
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PlatformTest extends TestCase
{
    const ACCOUNT_TYPE = 'OWNED';
    const ACCOUNT_EMAIL = 'customer@website.com';
    const ACCOUNT_BUSINESS_NAME = 'customer company';

    /**
     * Create Account test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testAccountIsCreatable()
    {
        $expected = [
            'email' => self::ACCOUNT_EMAIL,
            'type' => self::ACCOUNT_TYPE,
            'public_profile' => ['business_name' => self::ACCOUNT_BUSINESS_NAME]
        ];

        $this->stubRequest(
            'POST',
            '/v2/accounts',
            $expected,
            [],
            $expected
        );

        $result = Platform::createAccount($expected);

        $this->assertEquals($result['email'], $expected['email']);
        $this->assertEquals($result['type'], $expected['type']);
    }

    /**
     * Get Account by ID test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testAccountIsGettable()
    {
        $expectedResponse = [
            'id' => '5cafeb170a2b18519b1b8761',
            'created' => '2021-01-01T10:00:00Z',
            'updated' => '2021-01-01T10:00:00Z',
            'type'=> 'OWNED',
            'email'=> 'angie@pinkpanther.com',
            'status'=> 'LIVE',
        ];
        $this->stubRequest(
            'GET',
            '/v2/accounts/5cafeb170a2b18519b1b8761',
            [],
            [],
            $expectedResponse
        );

        $result = Platform::getAccount('5cafeb170a2b18519b1b8761');
        $this->assertEquals($result['id'], $expectedResponse['id']);
        $this->assertEquals($result['type'], $expectedResponse['type']);
    }

    /**
     * Update Account test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testAccountIsUpdatable()
    {
        $expected = [
            'email' => self::ACCOUNT_EMAIL,
            'public_profile' => ['business_name' => self::ACCOUNT_BUSINESS_NAME.' Updated']
        ];

        $this->stubRequest(
            'PATCH',
            '/v2/accounts/5cafeb170a2b18519b1b8761',
            $expected,
            [],
            $expected
        );

        $result = Platform::updateAccount('5cafeb170a2b18519b1b8761', $expected);

        $this->assertEquals($result['email'], $expected['email']);
    }

    /**
     * Create Transfer test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testTransferIsCreatable()
    {
        $expected = [
            'reference' => ''.time(),
            'amount' => 50000,
            'source_user_id' => '54afeb170a2b18519b1b8768',
            'destination_user_id' => '5cafeb170a2b1851246b8768',
        ];

        $this->stubRequest(
            'POST',
            '/transfers',
            $expected,
            [],
            $expected
        );

        $result = Platform::createTransfer($expected);

        $this->assertEquals($result['source_user_id'], $expected['source_user_id']);
        $this->assertEquals($result['destination_user_id'], $expected['destination_user_id']);
    }

    /**
     * Create Fee Rule test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testFeeRuleIsCreatable()
    {
        $params = [
            'name' => 'standard_platform_fee',
            'description' => 'Fee charged to insurance agents based in Java',
            'unit' => 'flat',
            'amount' => 6500,
            'currency' => 'IDR'
        ];

        $expected = [
            'name' => 'standard_platform_fee',
            'description' => 'Fee charged to insurance agents based in Java',
            'routes' => [
                array(
                    'unit' => 'flat',
                    'amount' => 6500,
                    'currency' => 'IDR'
                )
            ]
        ];

        $this->stubRequest(
            'POST',
            '/fee_rules',
            $expected,
            [],
            $expected
        );

        $result = Platform::createFeeRule($params);

        $this->assertEquals($result['name'], $expected['name']);
    }

    /**
     * Set Callback URL test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testCallbackUrlIsCreatable()
    {
        $expected = [
            'url' => 'https://webhook.site/c9c9140b-96b8-434c-9c59-7440eeae4d7f'
        ];
        $callbackType = 'invoice';

        $this->stubRequest(
            'POST',
            '/callback_urls/'.$callbackType,
            $expected,
            [],
            $expected
        );

        $result = Platform::setCallbackUrl($callbackType, $expected);

        $this->assertEquals($result['url'], $expected['url']);
    }

    /**
     * Create Account test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testAccountIsCreatableThrowsException()
    {
        $expected = [
            'email' => self::ACCOUNT_EMAIL
        ];

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Platform::createAccount($expected);
    }

    /**
     * Get account by ID test
     * Should throw ApiException
     *
     * @return void
     */
    public function testAccountIsGettableThrowsException()
    {
        $id = '358115033581150335811503358115033581150335811503358115033581150335811503358115033581150335811503358115033581150335811503';
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Platform::getAccount($id);
    }

    /**
     * Update Account test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testAccountIsUpdatetableThrowsException()
    {
        $expected = [
            'public_profile' => ['business_name' => self::ACCOUNT_BUSINESS_NAME.' Updated']
        ];

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Platform::updateAccount($expected);
    }

    /**
     * Create Transfer test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testTransferIsCreatableThrowsException()
    {
        $expected = [
            'reference' => time()
        ];

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Platform::createTransfer($expected);
    }

    /**
     * Create Fee Rule test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testFeeRuleIsCreatableThrowsException()
    {
        $expected = [
            'name' => 'standard_platform_fee'
        ];

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Platform::createFeeRule($expected);
    }

    /**
     * Set Callback URL test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testCallbackurlIsCreatableThrowsException()
    {
        $expected = [];
        $callbackType = 'invoice';

        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Platform::setCallbackUrl($callbackType, $expected);
    }
}
