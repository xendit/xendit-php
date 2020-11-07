<?php

/**
 * CardlessCreditTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\CardlessCredit;
use Xendit\TestCase;

/**
 * Class CardlessCreditTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class CardlessCreditTest extends TestCase
{
    const TEST_ID = "TEST-123";

    /**
     * Create Payment test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'cardless_credit_type'=> 'KREDIVO',
            'external_id'=> 'test-cardless-credit-01',
            'amount'=> 800000,
            'payment_type'=> '3_months',
            'items'=> [
                [
                    'id'=> '123123',
                    'name'=> 'Phone Case',
                    'price'=> 200000,
                    'type'=> 'Smartphone',
                    'url'=> 'http=>//example.com/phone/phone_case',
                    'quantity'=> 2
                ],
                [
                    'id'=> '234567',
                    'name'=> 'Bluetooth Headset',
                    'price'=> 400000,
                    'type'=> 'Audio',
                    'url'=> 'http=>//example.com/phone/bluetooth_headset',
                    'quantity'=> 1
                ]
            ],
            'customer_details'=> [
                'first_name'=> 'customer first name',
                'last_name'=> 'customer last name',
                'email'=> 'customer@yourwebsite.com',
                'phone'=> '081513114262'
            ],
            'shipping_address'=> [
                'first_name'=> 'first name',
                'last_name'=> 'last name',
                'address'=> 'Jalan Teknologi No. 12',
                'city'=> 'Jakarta',
                'postal_code'=> '12345',
                'phone'=> '081513114262',
                'country_code'=> 'IDN'
            ],
            'redirect_url'=> 'https://example.com',
            'callback_url'=> 'http://example.com/callback-cardless-credit'
        ];

        $this->stubRequest(
            'POST',
            '/cardless-credit',
            $params,
            [],
            $params
        );

        $result = CardlessCredit::create($params);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals(
            $result['cardless_credit_type'],
            $params['cardless_credit_type']
        );
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['payment_type'], $params['payment_type']);
        $this->assertEquals($result['items'], $params['items']);
        $this->assertEquals(
            $result['customer_details'],
            $params['customer_details']
        );
        $this->assertEquals(
            $result['shipping_address'],
            $params['shipping_address']
        );
        $this->assertEquals($result['redirect_url'], $params['redirect_url']);
        $this->assertEquals($result['callback_url'], $params['callback_url']);
    }

    /**
     * Create payment test
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

        CardlessCredit::create($params);
    }

    /**
     * Calculate payment types
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $params = [
            'cardless_credit_type' => 'KREDIVO',
            'amount' => 2000000,
            'items' => [
                [
                    'id' => '123123',
                    'name' => 'Phone Case',
                    'price' => 1000000,
                    'type' => 'Smartphone',
                    'url' => 'http://example.com/phone/phone_case',
                    'quantity' => 2
                ]
            ]
        ];

        $response = [
            "message" => "Available payment types are listed.",
            "payments" => [
                [
                    "raw_monthly_installment" => 187534.66680439,
                    "name" => "Bayar dalam 6 bulan",
                    "amount" => 1000000,
                    "installment_amount" => 1125240,
                    "raw_amount" => 1000000,
                    "rate" => 2.95,
                    "down_payment" => 0,
                    "monthly_installment" => 187540,
                    "discounted_monthly_installment" => 0,
                    "tenure" => 6,
                    "id" => "6_months",
                ],
                [
                    "raw_monthly_installment" => 1020000,
                    "name" => "Bayar dalam 30 hari",
                    "amount" => 1020000,
                    "installment_amount" => 1020000,
                    "raw_amount" => 1020000,
                    "rate" => 0,
                    "down_payment" => 0,
                    "monthly_installment" => 1020000,
                    "discounted_monthly_installment" => 0,
                    "tenure" => 1,
                    "id" => "30_days",
                ],
                [
                    "raw_monthly_installment" => 356786.46273702,
                    "name" => "Bayar dalam 3 bulan",
                    "amount" => 1000000,
                    "installment_amount" => 1070370,
                    "raw_amount" => 1000000,
                    "rate" => 2.95,
                    "down_payment" => 0,
                    "monthly_installment" => 356790,
                    "discounted_monthly_installment" => 0,
                    "tenure" => 3,
                    "id" => "3_months",
                ],
            ],
        ];

        $this->stubRequest(
            'POST',
            '/cardless-credit/payment-types',
            $params,
            [],
            $response
        );

        $result = CardlessCredit::calculatePaymentTypes($params);

        $this->assertArrayHasKey('message', $result);
        $this->assertArrayHasKey('payments', $result);
    }

    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $params = [
            'cardless_credit_type' => 'KREDIVO',
            'amount' => 2000000,
            'items' => [
                [
                    'id' => '123123',
                    'name' => 'Phone Case',
                    'price' => 1000000,
                    'type' => 'Smartphone',
                    'url' => 'http://example.com/phone/phone_case',
                    'quantity' => 2
                ]
            ]
        ];

        CardlessCredit::calculatePaymentTypes($params);
    }
}
