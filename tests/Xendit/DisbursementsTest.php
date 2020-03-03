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

    /**
     * Create Disbursements test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'external_id'=> 'disb-12345678',
            'amount'=> 15000,
            'bank_code'=> 'BCA',
            'account_holder_name'=> 'Joe',
            'account_number'=> '1234567890',
            'description'=>'Disbursement from Example'
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
            'reference'=> 'disb_batch-12345678',
            'disbursements'=> [
                [
                    'amount'=> 20000,
                    'bank_code'=> 'BCA',
                    'bank_account_name'=> 'Fadlan',
                    'bank_account_number'=> '1234567890',
                    'description'=> 'Batch Disbursement',
                    'external_id'=> 'disbursement-1'
                ],
                [
                    'amount'=> 30000,
                    'bank_code'=> 'MANDIRI',
                    'bank_account_name'=> 'Lutfi',
                    'bank_account_number'=> '1234567891',
                    'description'=> 'Batch Disbursement with email notifications',
                    'external_id'=> 'disbursement-2',
                    'email_to'=> ['test+to@xendit.co'],
                    'email_cc'=> ['test+cc@xendit.co'],
                    'email_bcc'=> ['test+bcc1@xendit.co', 'test+bcc2@xendit.co']
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
            'can_name_validate'=> true
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
            '/disbursements/'.self::TEST_ID,
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
            '/disbursements?external_id='.self::TEST_ID,
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
}
