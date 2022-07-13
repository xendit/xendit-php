<?php

/**
 * DisbursementsTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Disbursements;
use Xendit\TestCase;

/**
 * Class DisbursementsTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DisbursementsTest extends TestCase
{
    const TEST_ID = "123";
    const CHANNEL_CATEGORY = "BANK";
    const CHANNEL_CODE = "PH_CIMB";

    /**
     * Create Disbursements test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id' => 'disb-12345678',
            'amount' => 15000,
            'bank_code' => 'BCA',
            'account_holder_name' => 'Joe',
            'account_number' => '1234567890',
            'description' => 'Disbursement from Example'
        ];

        $this->stubRequest(
            'POST',
            '/disbursements',
            $params,
            [],
            $params
        );

        $result = Disbursements::create($params);
        $this->assertEquals($result['external_id'], $params['external_id']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['bank_code'], $params['bank_code']);
        $this->assertEquals(
            $result['account_holder_name'],
            $params['account_holder_name']
        );
        $this->assertEquals($result['account_number'], $params['account_number']);
        $this->assertEquals($result['description'], $params['description']);
    }

    /**
     * Create Batch Disbursements test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsBatchCreatable()
    {
        $params = [
            'reference' => 'disb_batch-12345678',
            'disbursements' => [
                [
                    'amount' => 20000,
                    'bank_code' => 'BCA',
                    'bank_account_name' => 'Fadlan',
                    'bank_account_number' => '1234567890',
                    'description' => 'Batch Disbursement',
                    'external_id' => 'disbursement-1'
                ],
                [
                    'amount' => 30000,
                    'bank_code' => 'MANDIRI',
                    'bank_account_name' => 'Lutfi',
                    'bank_account_number' => '1234567891',
                    'description' => 'Batch Disbursement with email notifications',
                    'external_id' => 'disbursement-2',
                    'email_to' => ['test+to@xendit.co'],
                    'email_cc' => ['test+cc@xendit.co'],
                    'email_bcc' => ['test+bcc1@xendit.co', 'test+bcc2@xendit.co']
                ]
            ]
        ];

        $this->stubRequest(
            'POST',
            '/batch_disbursements',
            $params,
            [],
            $params
        );

        $result = Disbursements::createBatch($params);
        $this->assertEquals($result['reference'], $params['reference']);
        $this->assertEquals($result['disbursements'], $params['disbursements']);
    }

    /**
     * Get DisbursementsBanks test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testBanksIsGettable()
    {
        $expectedResponse = [[
            'name' => 'Bank Mandiri',
            'code' => 'MANDIRI',
            'can_disburse' => true,
            'can_name_validate' => true
        ]];
        $this->stubRequest(
            'GET',
            '/available_disbursements_banks',
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getAvailableBanks();
        $this->assertEquals($result[0]['name'], $expectedResponse[0]['name']);
        $this->assertEquals($result[0]['code'], $expectedResponse[0]['code']);
        $this->assertEquals(
            $result[0]['can_disburse'],
            $expectedResponse[0]['can_disburse']
        );
        $this->assertEquals(
            $result[0]['can_name_validate'],
            $expectedResponse[0]['can_name_validate']
        );
    }

    /**
     * Get Disbursements by ID test
     * Should pass
     *
     * @return void
     */
    public function testIsGettableByID()
    {
        $this->stubRequest(
            'GET',
            '/disbursements/' . self::TEST_ID,
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = Disbursements::retrieve(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Get Disbursements by External ID test
     * Should pass
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableByExternalID()
    {
        $this->stubRequest(
            'GET',
            '/disbursements?external_id=' . self::TEST_ID,
            [],
            [],
            [
                'id' => self::TEST_ID
            ]
        );

        $result = Disbursements::retrieveExternal(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
    }

    /**
     * Create Disbursements test
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

        Disbursements::create($params);
    }

    /**
     * Create Batchs Disbursements test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsBatchCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270'
        ];

        Disbursements::createBatch($params);
    }

    /**
     * Get Disbursements by ID test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableByIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Disbursements::retrieve(self::TEST_ID);
    }

    /**
     * Get Disbursements by External ID test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableByExtIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Disbursements::retrieveExternal(self::TEST_ID);
    }

    /**
     * V1 Create Disbursements test
     * Should pass
     *
     * @return array[
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]
     * @throws Exceptions\ApiException
     */
    public function testIsCreatableDisbursement()
    {
        $params = [
            'xendit_idempotency_key' => 'disb-12345678',
            'reference_id' => 'disb-12345678',
            'currency' => 'PHP',
            'amount' => 15000,
            'channel_code' => 'BCA',
            'account_name' => 'Joe',
            'account_number' => '1234567890',
            'description' => 'Disbursement from Example'
        ];

        $expectedResponse = $params;
        $expectedResponse['id'] = self::TEST_ID;
        $this->stubRequest(
            'POST',
            '/disbursements',
            $params,
            [],
            $expectedResponse
        );

        $result = Disbursements::createDisbursement($params);
        $this->assertEquals($result['id'], self::TEST_ID);
        $this->assertEquals($result['reference_id'], $params['reference_id']);
        $this->assertEquals($result['amount'], $params['amount']);
        $this->assertEquals($result['channel_code'], $params['channel_code']);
        $this->assertEquals(
            $result['account_name'],
            $params['account_name']
        );
        $this->assertEquals($result['account_number'], $params['account_number']);
        $this->assertEquals($result['description'], $params['description']);
    }

    /**
     * Create V1 Disbursements test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsCreateDisbThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270'
        ];

        Disbursements::createDisbursement($params);
    }

    /**
     * Create V1 Disbursements test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsCreateDisbThrowApiException()
    {
        $params = [
            'xendit_idempotency_key' => 'disb-12345678',
            'reference_id' => 'disb-12345678',
            'currency' => 'PHP',
            'amount' => 15000,
            'channel_code' => 'BCA',
            'account_name' => 'Joe',
            'account_number' => '1234567890',
            'description' => 'Disbursement from Example'
        ];
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Disbursements::createDisbursement($params);
    }

    /**
     * Get Disbursements by ID test
     * Should pass
     *
     * @return array[
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableByDisbursementID()
    {
        $expectedResponse = [
            'id' => self::TEST_ID,
            'xendit_idempotency_key' => 'disb-12345678',
            'reference_id' => 'disb-12345678',
            'currency' => 'PHP',
            'amount' => 15000,
            'channel_code' => 'BCA',
            'account_name' => 'Joe',
            'account_number' => '1234567890',
            'description' => 'Disbursement from Example'
        ];
        $this->stubRequest(
            'GET',
            '/disbursements/' . self::TEST_ID,
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getDisbursementByID(self::TEST_ID);
        $this->assertEquals($result['id'], self::TEST_ID);
        $this->assertEquals($result['reference_id'], $expectedResponse['reference_id']);
        $this->assertEquals($result['amount'], $expectedResponse['amount']);
        $this->assertEquals($result['channel_code'], $expectedResponse['channel_code']);
        $this->assertEquals(
            $result['account_name'],
            $expectedResponse['account_name']
        );
        $this->assertEquals($result['account_number'], $expectedResponse['account_number']);
        $this->assertEquals($result['description'], $expectedResponse['description']);
    }

    /**
     * Get Disbursements by Disbursement ID test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableByDisbursementIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Disbursements::getDisbursementByID(self::TEST_ID);
    }

    /**
     * Get Disbursements by Reference ID test
     * Should pass
     *
     * @return array[
     * [
     * 'id'=> 'disb-random-id',
     * 'reference_id'=> 'random id',
     * 'currency'=> 'PHP',
     * 'amount'=> float
     * 'channel_code'=> 'BRI',
     * 'description'=> 'description',
     * 'status'=> 'Pending',
     * 'created'=> 'Date',
     * 'updated'=> 'Date',
     * 'email_to'=> ['test+to1@xendit.co','test+to2@xendit.co'],
     * 'email_cc'=> ['test+bcc@xendit.co'],
     * 'email_bcc'=> ['test+bcc@xendit.co']
     * ]]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableDisbursementsByReferenceID()
    {
        $expectedResponse = [
            [
                'id' => 'disb-12345678',
                'xendit_idempotency_key' => 'disb-12345678',
                'reference_id' => self::TEST_ID,
                'currency' => 'PHP',
                'amount' => 15000,
                'channel_code' => 'BCA',
                'account_name' => 'Joe',
                'account_number' => '1234567890',
                'description' => 'Disbursement from Example'
            ]
        ];
        $this->stubRequest(
            'GET',
            '/disbursements?reference_id=' . self::TEST_ID,
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getDisbursementsByReferenceID(self::TEST_ID);
        $this->assertEquals($result[0]['id'], $expectedResponse[0]['id']);
        $this->assertEquals($result[0]['reference_id'], self::TEST_ID);
        $this->assertEquals($result[0]['amount'], $expectedResponse[0]['amount']);
        $this->assertEquals($result[0]['channel_code'], $expectedResponse[0]['channel_code']);
        $this->assertEquals(
            $result[0]['account_name'],
            $expectedResponse[0]['account_name']
        );
        $this->assertEquals($result[0]['account_number'], $expectedResponse[0]['account_number']);
        $this->assertEquals($result[0]['description'], $expectedResponse[0]['description']);
    }

    /**
     * Get Disbursements by Reference ID test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableDisbursementsByReferenceIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $result = Disbursements::getDisbursementsByReferenceID(null);
        var_dump($result);
    }

    /**
     * Get Disbursement Channels
     * Should pass
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannels()
    {
        $expectedResponse = [
            [
                'channel_code' => 'PH_CIMB',
                'name' => 'CIMB Bank Philippines Inc',
                'channel_category' => 'BANK',
                'currency' => 'PHP',
                'minimum' => 50000,
                'maximum' => 200000000,
                'minimum_increment' => 0.01
            ], [
                'channel_code' => 'PH_CITI',
                'name' => 'Citibank, N.A.',
                'channel_category' => 'BANK',
                'currency' => 'PHP',
                'minimum' => 1,
                'maximum' => 999999999,
                'minimum_increment' => 1
            ]
        ];
        $this->stubRequest(
            'GET',
            '/disbursement-channels',
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getDisbursementChannels();
        $this->assertEquals($result[0]['channel_code'], $expectedResponse[0]['channel_code']);
        $this->assertEquals($result[1]['channel_code'], $expectedResponse[1]['channel_code']);
        $this->assertCount(2, $result);
    }

    /**
     * Get Disbursement Channels by channel category
     * Should pass
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ], [
     * 'channel_code'=> 'PH_CITI',
     * 'name'=> 'Citibank, N.A.',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 1,
     * 'maximum'=> 999999999,
     * 'minimum_increment'=> 1
     * ]]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCategory()
    {
        $expectedResponse = [
            [
                'channel_code' => 'PH_CIMB',
                'name' => 'CIMB Bank Philippines Inc',
                'channel_category' => 'BANK',
                'currency' => 'PHP',
                'minimum' => 50000,
                'maximum' => 200000000,
                'minimum_increment' => 0.01
            ], [
                'channel_code' => 'PH_CITI',
                'name' => 'Citibank, N.A.',
                'channel_category' => 'BANK',
                'currency' => 'PHP',
                'minimum' => 1,
                'maximum' => 999999999,
                'minimum_increment' => 1
            ]
        ];
        $this->stubRequest(
            'GET',
            '/disbursement-channels?channel_category=' . self::CHANNEL_CATEGORY,
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getDisbursementChannelsByChannelCategory(self::CHANNEL_CATEGORY);
        $this->assertEquals($result[0]['channel_category'], $expectedResponse[0]['channel_category']);
        $this->assertEquals($result[1]['channel_category'], $expectedResponse[1]['channel_category']);
        $this->assertCount(2, $result);
    }

    /**
     * Get Disbursements Channels by Channel Category test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCategoryThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Disbursements::getDisbursementChannelsByChannelCategory(null);
    }

    /**
     * Get Disbursement Channels by Channel Code
     * Should pass
     *
     * @return array[
     * [
     * 'channel_code'=> 'PH_CIMB',
     * 'name'=> 'CIMB Bank Philippines Inc',
     * 'channel_category'=> 'BANK',
     * 'currency'=> 'PHP',
     * 'minimum'=> 50000,
     * 'maximum'=> 200000000,
     * 'minimum_increment'=> 0.01
     * ]]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCode()
    {
        $expectedResponse = [
            [
                'channel_code' => 'PH_CIMB',
                'name' => 'CIMB Bank Philippines Inc',
                'channel_category' => 'BANK',
                'currency' => 'PHP',
                'minimum' => 50000,
                'maximum' => 200000000,
                'minimum_increment' => 0.01
            ]
        ];
        $this->stubRequest(
            'GET',
            '/disbursement-channels?channel_code=' . self::CHANNEL_CODE,
            [],
            [],
            $expectedResponse
        );

        $result = Disbursements::getDisbursementChannelsByChannelCode(self::CHANNEL_CODE);
        $this->assertEquals($result[0]['channel_code'], $expectedResponse[0]['channel_code']);
        $this->assertCount(1, $result);
    }

    /**
     * Get Disbursements Channels by Channel Code test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCodeThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Disbursements::getDisbursementChannelsByChannelCode(null);
    }
}
