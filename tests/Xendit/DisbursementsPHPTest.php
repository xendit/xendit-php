<?php

/**
 * DisbursementsPHPTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\DisbursementsPHP;
use Xendit\TestCase;

/**
 * Class DisbursementsPHPTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DisbursementsPHPTest extends TestCase
{
    const TEST_ID = "123";

    /**
     * Create PHP Disbursements test
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
     * receipt_notification => Array
     * beneficiary => Array
     * @throws Exceptions\ApiException
     */
    public function testIsCreatablePHPDisbursement()
    {
        $params = [
            'xendit-idempotency-key' => 'disb-12345678',
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

        $result = DisbursementsPHP::createPHPDisbursement($params);
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
     * Create PHP Disbursements test
     * Should throw InvalidArgumentException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsCreatePHPDisbThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'external_id' => 'demo_147580196270'
        ];

        DisbursementsPHP::createPHPDisbursement($params);
    }

    /**
     * Create PHP Disbursements test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsCreatePHPDisbThrowApiException()
    {
        $params = [
            'xendit-idempotency-key' => 'disb-12345678',
            'reference_id' => 'disb-12345678',
            'currency' => 'PHP',
            'amount' => 15000,
            'channel_code' => 'BCA',
            'account_name' => 'Joe',
            'account_number' => '1234567890',
            'description' => 'Disbursement from Example'
        ];
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        DisbursementsPHP::createPHPDisbursement($params);
    }

    /**
     * Get PHP Disbursements by ID test
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
     * receipt_notification => Array
     * beneficiary => Array
     * ]
     * @throws Exceptions\ApiException
     */
    public function testIsGettableByPHPDisbursementID()
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

        $result = DisbursementsPHP::getPHPDisbursementByID(self::TEST_ID);
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
     * Get PHP Disbursements by Disbursement ID test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableByPHPDisbursementIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        DisbursementsPHP::getPHPDisbursementByID(self::TEST_ID);
    }

    /**
     * Get PHP Disbursements by Reference ID test
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
     * receipt_notification => Array
     * beneficiary => Array]
     * @throws Exceptions\ApiException
     */
    public function testIsGettablePHPDisbursementsByReferenceID()
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

        $result = DisbursementsPHP::getPHPDisbursementsByReferenceID(self::TEST_ID);
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
     * Get PHP Disbursements by Reference ID test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettablePHPDisbursementsByReferenceIDThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        $result = DisbursementsPHP::getPHPDisbursementsByReferenceID(null);
        var_dump($result);
    }
}
