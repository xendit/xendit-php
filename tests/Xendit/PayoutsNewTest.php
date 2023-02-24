<?php

namespace Xendit;

/**
 * Class PayoutsNewTest
 *
 * @category Class
 * @package  Xendit
 * @author   Yanuar <yanuaraditia@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PayoutsNewTest extends TestCase
{
    const TEST_ID = "123";
    const TEST_REFERENCE_ID = 'ref-XA322';
    const CHANNEL_CODE = "ID_BCA";

    /**
     * Create Payouts test
     * Should pass
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'reference_id'         => self::TEST_REFERENCE_ID,
            'channel_code'         => 'ID_BRI',
            'channel_properties'   => [
                'account_number'      => '0000000000',
                'account_holder_name' => 'Yanuar'
            ],
            'amount'               => 1000,
            'description'          => 'Sample Successful Create IDR Payout',
            'currency'             => 'IDR',
            'receipt_notification' => [
                'email_to'  => ['someone@example.com'],
                'email_cc'  => ['someone1@example.com'],
                'email_bcc' => ['someone2@example.com'],
            ],
            'metadata'             => [
                'lotto_outlet' => 24
            ]
        ];

        $this->stubRequest(
            'POST',
            '/v2/payouts',
            $params,
            [],
            $params
        );

        $result = PayoutsNew::create($params);
        $this->assertEquals($result['reference_id'], $params['reference_id']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['channel_code'], $params['channel_code']);
        $this->assertEquals(
            $result['channel_properties']['account_holder_name'],
            $params['channel_properties']['account_holder_name']
        );
        $this->assertEquals(
            $result['channel_properties']['account_number'],
            $params['channel_properties']['account_number']
        );
        $this->assertEquals($result['currency'], $params['currency']);
        $this->assertEquals($result['description'], $params['description']);
    }

    /**
     * Get Payouts Channel test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testChannelsIsGettable()
    {
        $expectedResponse = [
            [
                'channel_code'     => 'ID_BSI',
                'channel_category' => 'BANK',
                'currency'         => 'IDR',
                'channel_name'     => 'Bank Syariah Indonesia',
                'amount_limits'    => [
                    'minimum'           => 10000,
                    'maximum'           => 1999999999999,
                    'minimum_increment' => 1
                ]
            ]
        ];

        $this->stubRequest(
            'GET',
            '/payouts_channels',
            [],
            [],
            $expectedResponse
        );

        $result = PayoutsNew::getPayoutsChannels();
        $this->assertEquals($result[0]['channel_code'], $expectedResponse[0]['channel_code']);
        $this->assertEquals($result[0]['channel_category'], $expectedResponse[0]['channel_category']);
        $this->assertEquals(
            $result[0]['channel_name'],
            $expectedResponse[0]['channel_name']
        );
        $this->assertEquals(
            $result[0]['currency'],
            $expectedResponse[0]['currency']
        );
    }

    /**
     * Get Payouts by ID test
     * Should pass
     *
     * @return void
     */
    public function testIsGettableByID()
    {
        $this->stubRequest(
            'GET',
            '/v2/payouts/' . self::TEST_ID,
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = PayoutsNew::retrieve(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Get Disbursements by Reference ID test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableByReferenceID()
    {
        $this->stubRequest(
            'GET',
            '/v2/payouts?reference_id=' . self::TEST_REFERENCE_ID,
            [],
            [],
            [
                'reference_id' => self::TEST_REFERENCE_ID
            ]
        );

        $result = PayoutsNew::retrieveReference(self::TEST_REFERENCE_ID);
        $this->assertEquals($result['reference_id'], self::TEST_REFERENCE_ID);
    }

    /**
     * Create Payouts test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'reference_id' => 'demo_147580196270'
        ];

        PayoutsNew::create($params);
    }

    /**
     * Void Payouts test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsVoidable()
    {
        $expectedResponse = [
            'id'           => self::TEST_ID,
            'status'       => 'CANCELLED',
            'reference_id' => self::TEST_REFERENCE_ID,
        ];

        $this->stubRequest(
            'GET',
            '/v2/payouts/' . self::TEST_ID . '/cancel',
            [],
            [],
            $expectedResponse
        );

        $result = PayoutsNew::cancel(self::TEST_ID);
        $this->assertEquals($result['id'], $expectedResponse['id']);
        $this->assertEquals($result['status'], $expectedResponse['status']);
        $this->assertEquals($result['reference_id'], $expectedResponse['reference_id']);
    }


    /**
     * Get Payouts by ID test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableByIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        PayoutsNew::retrieve(self::TEST_ID);
    }

    /**
     * Get Payouts by Reference ID test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableByReferenceIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        PayoutsNew::retrieve(self::TEST_REFERENCE_ID);
    }

}
