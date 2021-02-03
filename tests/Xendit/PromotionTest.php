<?php

/**
 * PromotionTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Christian Atilano <christian.atilano@xendit.co>
 * @license  https::/opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Promotion;

/**
 * Class PromotionTest
 *
 * @category Class
 * @package  Xendit
 * @author   Christian Atilano <christian.atilano@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PromotionTest extends TestCase
{
    /**
     * Create Promotion test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'reference_id' => 'reference_123',
            'description' => 'test promotion',
            'currency' => 'IDR',
            'start_time' => '2021-03-02T00:00:00.000Z',
            'end_time' => '2021-04-02T00:00:00.000Z',
            'promo_code' => 'testpromocode',
            'discount_amount' => 5000
        ];

        $expectedResult = [
            'id' => '123',
            'business_id' => 'business_123',
            'reference_id' => 'reference_123',
            'start_time' => '2021-03-02T00:00:00.000Z',
            'end_time' => '2021-04-02T00:00:00.000Z',
            'description' => 'test promotion',
            'type' => 'PROMO_CODE',
            'promo_code' => 'testpromocode',
            'discount_amount' => 5000,
            'currency' => 'IDR',
            'created' => '2021-01-01T00:00:00.000Z',
            'status' => 'ACTIVE'
        ];

        $this -> stubRequest(
            'POST',
            '/promotions',
            $params,
            [],
            $expectedResult
        );

        $result = Promotion::create($params);

        $this->assertEquals($result['id'], '123');
        $this->assertEquals($result['business_id'], 'business_123');
        $this->assertEquals($result['reference_id'], $params['reference_id']);
        $this->assertEquals($result['start_time'], $params['start_time']);
        $this->assertEquals($result['end_time'], $params['end_time']);
        $this->assertEquals($result['description'], $params['description']);
        $this->assertEquals($result['type'], 'PROMO_CODE');
        $this->assertEquals($result['promo_code'], $params['promo_code']);
        $this->assertEquals($result['discount_amount'], $params['discount_amount']);
        $this->assertEquals($result['currency'], $params['currency']);
        $this->assertEquals($result['created'], '2021-01-01T00:00:00.000Z');
        $this->assertEquals($result['status'], 'ACTIVE');
    }

    /**
     * Create Promotion
     * Should throw InvalidArgumentException when promo_code and bin_list does not exists
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentExceptionIfPromoCodeOrBinListDoesNotExists()
    {
        $this->expectException(Exceptions\InvalidArgumentException::class);
        $params = [];

        Promotion::create($params);
    }

    /**
     * Create Promotion
     * Should throw InvalidArgumentExcpetion when discount_amount or discount_percent does not exists
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentExceptionIfDiscAmountOrDiscPercentDoesNotExists()
    {
        $this->expectException(Exceptions\InvalidArgumentException::class);
        $params = [
            'promo_code' => 'testpromocode',
        ];

        Promotion::create($params);
    }
}
