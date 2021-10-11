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

    public function testIsPayLaterChargeCreateable()
    {
        $params = [
            'plan_id' => 'plp_f7e93093-b949-4ccf-8be8-ea6abdab6149',
            'reference_id' => 'order_id_234',
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'success_redirect_url' => 'https://google.com',
            'failure_redirect_url' => 'https://twitter.com',
        ];

        $response = [
            'id' => 'plc_6606beb5-66ac-4165-be4b-e24c589fe01f',
            'business_id' => '603f1c4172bbe840979fd408',
            'reference_id' => 'order_id_234',
            'customer_id' => 'f1172e79-1c9a-4e67-a177-de1bf4c90108',
            'plan_id' => 'plp_f7e93093-b949-4ccf-8be8-ea6abdab6149',
            'currency' => 'IDR',
            'amount' => 10000,
            'channel_code' => 'ID_AKULAKU',
            'checkout_method' => 'ONE_TIME_PAYMENT',
            'status' => 'PENDING',
            'actions' => [
                'desktop_web_checkout_url' => 'https://paylater-mock-connector-dev.xendit.co/checkout?charge_id=6606beb5-66ac-4165-be4b-e24c589fe01f&connector_reference_id=ee0bad99-ce1a-44b5-b6ef-f838ce87bdf1&business_id=603f1c4172bbe840979fd408',
                'mobile_web_checkout_url' => 'https://paylater-mock-connector-dev.xendit.co/checkout?charge_id=6606beb5-66ac-4165-be4b-e24c589fe01f&connector_reference_id=ee0bad99-ce1a-44b5-b6ef-f838ce87bdf1&business_id=603f1c4172bbe840979fd408'
            ],
            'success_redirect_url' => 'https://google.com',
            'failure_redirect_url' => 'https://twitter.com',
            'callback_url' => 'https://webhook.site/d4478770-60be-4556-a8e5-f0d929e1f8cb',
            'created' => '2021-10-08T05:00:31.413Z',
            'updated' => '2021-10-08T05:00:31.545Z',
            'order_items' => [
                [
                    "type" => "PHYSICAL_PRODUCT",
                    "reference_id" => "1533",
                    "name" => "iPhone X - 64 GB - Space Gray",
                    "net_unit_amount" => 6000000,
                    "quantity" => 1,
                    "url" => "https://jagofon.com/en/product/apple-iphone-x-64-gb-space-gray-1533",
                    "category" => "Smartphone"
                ]
            ],
            'voided_at' => null,
            'payment_method_id' => null,
            'metadata' => null,
            'channel_reference' => 'ee0bad99-ce1a-44b5-b6ef-f838ce87bdf1'
        ];

        $this->stubRequest(
            'POST',
            '/paylater/charges',
            $params,
            [],
            $response,
        );

        $result = PayLater::createPayLaterCharge($params);

        $this->assertArrayHasKey('id', $result);
        $this->assertEquals(
            $params['plan_id'],
            $result['plan_id']
        );
        $this->assertEquals(
            $params['reference_id'],
            $result['reference_id']
        );
        $this->assertEquals(
            $params['checkout_method'],
            $result['checkout_method']
        );
        $this->assertEquals(
            $params['success_redirect_url'],
            $result['success_redirect_url']
        );
        $this->assertEquals(
            $params['failure_redirect_url'],
            $result['failure_redirect_url']
        );
    }

    public function testIsPayLaterChargeCreateableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [];

        PayLater::createPayLaterCharge($params);
    }

    public function testIsPayLaterChargeCreateableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        $params = [
            'plan_id' => '',
            'reference_id' => '',
            'checkout_method' => '',
            'success_redirect_url' => '',
        ];

        PayLater::createPayLaterCharge($params);
    }
}
