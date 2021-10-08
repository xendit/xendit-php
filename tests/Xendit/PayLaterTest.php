<?php

/**
 * PayLaterTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Asoka Wotulo <asokawotulo2@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\PayLater;
use Xendit\TestCase;

/**
 * Class PayLaterTest
 *
 * @category Class
 * @package  Xendit
 * @author   Asoka Wotulo <asokawotulo2@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PayLaterTest extends TestCase
{
    public function testIsPayLaterPlanCreateable()
    {
        $params = [
            'customer_id' => '14b4bf47-b97a-4c13-bea9-5b1734a46fd1',
            'channel_code' => 'ID_AKULAKU',
            'currency' => 'IDR',
            'amount' => 6000000,
            'order_items' => [
                [
                    'type' => 'PHYSICAL_PRODUCT',
                    'reference_id' => '1533',
                    'name' => 'iPhone X - 64 GB - Space Gray',
                    'net_unit_amount' => 6000000,
                    'quantity' => 1,
                    'url' => 'https://jagofon.com/en/product/apple-iphone-x-64-gb-space-gray-1533',
                    'category' => 'Smartphone'
                ]
            ]
        ];

        $response = [
            'id' => 'plp_5b980f6b-0e15-4134-8eb2-4c500b74a7d9',
            'customer_id' => '14b4bf47-b97a-4c13-bea9-5b1734a46fd1',
            'channel_code' => 'ID_AKULAKU',
            'currency' => 'IDR',
            'amount' => 6000000,
            'order_items' => [
                [
                    'type' => 'PHYSICAL_PRODUCT',
                    'reference_id' => '1533',
                    'name' => 'iPhone X - 64 GB - Space Gray',
                    'net_unit_amount' => 6000000,
                    'quantity' => 1,
                    'url' => 'https://jagofon.com/en/product/apple-iphone-x-64-gb-space-gray-1533',
                    'category' => 'Smartphone'
                ]
            ],
            'options' => [
                [
                    'interval' => 'MONTH',
                    'interval_count' => 1,
                    'total_recurrence' => 1,
                    'total_amount' => 6212000,
                    'installment_amount' => 6212000,
                    'downpayment_amount' => 0,
                    'interest_rate' => 0,
                    'description' => '1 month'
                ],
                [
                    'interval' => 'MONTH',
                    'interval_count' => 1,
                    'total_recurrence' => 2,
                    'total_amount' => 6374000,
                    'installment_amount' => 3187000,
                    'downpayment_amount' => 0,
                    'interest_rate' => 0,
                    'description' => '2 months'
                ],
                [
                    'interval' => 'MONTH',
                    'interval_count' => 1,
                    'total_recurrence' => 3,
                    'total_amount' => 6546000,
                    'installment_amount' => 2182000,
                    'downpayment_amount' => 0,
                    'interest_rate' => 0,
                    'description' => '3 months'
                ]
            ],
            'created' => '2021-10-08T10:08:38.032Z',
        ];

        $this->stubRequest(
            'POST',
            '/paylater/plans',
            $params,
            [],
            $response,
        );

        $result = PayLater::initiatePayLaterPlans($params);

        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('created', $result);
        $this->assertIsArray($result['options']);
        $this->assertEquals($params['order_items'], $result['order_items']);
        $this->assertEquals($params['customer_id'], $result['customer_id']);
        $this->assertEquals($params['channel_code'], $result['channel_code']);
        $this->assertEquals($params['currency'], $result['currency']);
        $this->assertEquals($params['amount'], $result['amount']);
    }

    public function testIsPayLaterPlanCreateableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [];

        PayLater::initiatePayLaterPlans($params);
    }

    public function testIsPayLaterPlanCreateableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        $params = [
            "customer_id" => "14b4bf47-b97a-4c13-bea9-5b1734a46fd1",
            "channel_code" => "ID_KREDIVO",
            "currency" => "IDR",
            "amount" => 6000000,
            "order_items" => [
                [
                    "type" => "PHYSICAL_PRODUCT",
                    "reference_id" => "1533",
                    "name" => "iPhone X - 64 GB - Space Gray",
                    "net_unit_amount" => 6000000,
                    "quantity" => 1,
                    "url" => "https://jagofon.com/en/product/apple-iphone-x-64-gb-space-gray-1533",
                    "category" => "Smartphone"
                ]
            ]
        ];

        PayLater::initiatePayLaterPlans($params);
    }
}
