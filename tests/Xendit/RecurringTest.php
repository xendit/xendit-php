<?php

/**
 * RecurringTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Recurring;
use Xendit\TestCase;

/**
 * Class RecurringTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class RecurringTest extends TestCase
{
    const TEST_ID = "123";

    /**
     * Create Recurring test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id' => 'demo_147580196270',
            'payer_email' => 'sample_email@xendit.co',
            'description' => 'Trip to Bali',
            'amount' => 32000,
            'interval' => 'MONTH',
            'interval_count' => 1
        ];

        $this->stubRequest(
            'POST',
            '/recurring_payments',
            $params,
            [],
            $params
        );

        $result = Recurring::create($params);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['payer_email'], $params['payer_email']);
        $this->assertEquals($result['description'], $params['description']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['interval'], $params['interval']);
        $this->assertEquals($result['interval_count'], $params['interval_count']);
    }

    /**
     * Get Recurring test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $this->stubRequest(
            'get',
            '/recurring_payments/'.self::TEST_ID,
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = Recurring::retrieve(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Update Recurring test
     * Should pass
     *
     * @return void
     */
    public function testIsUpdateable()
    {
        $params = [
            'amount' => 32000,
            'interval' => 'MONTH',
            'interval_count' => 2
        ];

        $this->stubRequest(
            'PATCH',
            '/recurring_payments/' . self::TEST_ID,
            $params,
            [],
            $params
        );

        $result = Recurring::update(self::TEST_ID, $params);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['interval'], $params['interval']);
        $this->assertEquals($result['interval_count'], $params['interval_count']);
    }

    /**
     * Stop Recurring test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsStoppable()
    {
        $this->stubRequest(
            'post',
            '/recurring_payments/'.self::TEST_ID.'/stop!',
            [],
            [],
            [
                'id' => self::TEST_ID,
                'status' => 'STOPPED'
            ]
        );

        $result = Recurring::stop(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
        $this->assertEquals($result['status'], 'STOPPED');
    }

    /**
     * Pause Recurring test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPausable()
    {
        $this->stubRequest(
            'post',
            '/recurring_payments/'.self::TEST_ID.'/pause!',
            [],
            [],
            [
                'id' => self::TEST_ID,
                'status' => 'PAUSED'
            ]
        );

        $result = Recurring::pause(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
        $this->assertEquals($result['status'], 'PAUSED');
    }

    /**
     * Resume Recurring test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsResumable()
    {
        $this->stubRequest(
            'post',
            '/recurring_payments/'.self::TEST_ID.'/resume!',
            [],
            [],
            [
                'id' => self::TEST_ID,
                'status' => 'ACTIVE'
            ]
        );

        $result = Recurring::resume(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
        $this->assertEquals($result['status'], 'ACTIVE');
    }

    /**
     * Create Recurring test
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

        Recurring::create($params);
    }

    /**
     * Get Recurring test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Recurring::retrieve(self::TEST_ID);
    }

    /**
     * Update Recurring test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsUpdateableThrowException()
    {
        $params = [
            'amount' => 32000
        ];

        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Recurring::update(self::TEST_ID, $params);
    }

    /**
     * Stop Recurring test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsStoppableThrowException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Recurring::stop(self::TEST_ID);
    }

    /**
     * Pause Recurring test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsPausableThrowException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Recurring::pause(self::TEST_ID);
    }

    /**
     * Resume Recurring test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsResumableThrowException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $result = Recurring::resume(self::TEST_ID);
    }
}
