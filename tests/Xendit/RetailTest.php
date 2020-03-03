<?php

/**
 * RetailTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Retail;
use Xendit\TestCase;

/**
 * Class RetailTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class RetailTest extends TestCase
{
    const TEST_ID = "TEST-123";

    /**
     * Create FPC test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id'=> 'TEST-123456789',
            'retail_outlet_name'=> 'ALFAMART',
            'name'=> 'JOHN DOE',
            'expected_amount'=> 25000
        ];

        $this->stubRequest(
            'POST',
            '/fixed_payment_code',
            $params,
            [],
            $params
        );

        $result = Retail::create($params);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals(
            $result['retail_outlet_name'],
            $params['retail_outlet_name']
        );
        $this->assertEquals($result['name'], $params['name']);
        $this->assertEquals(
            $result['expected_amount'],
            $params['expected_amount']
        );
    }

    /**
     * Get FPC test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $this->stubRequest(
            'GET',
            '/fixed_payment_code/'.self::TEST_ID,
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = Retail::retrieve(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Update FPC test
     * Should pass
     *
     * @return void
     */
    public function testIsUpdateable()
    {
        $params = [
            'expected_amount' => 20000
        ];

        $this->stubRequest(
            'PATCH',
            '/fixed_payment_code/'.self::TEST_ID,
            $params,
            [],
            [
                'id' => self::TEST_ID,
                'suggested_amount' => 20000
            ]
        );

        $result = Retail::update(self::TEST_ID, $params);

        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Create FPC test
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

        Retail::create($params);
    }

    /**
     * Get FPC test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Retail::retrieve(self::TEST_ID);
    }

    /**
     * Update FPC test
     * Should throw
     *
     * @return void
     */
    public function testIsUpdateableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $params = ['suggested_amount' => 10000];

        Retail::update(self::TEST_ID, $params);
    }
}
