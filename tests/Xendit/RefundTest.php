<?php

namespace Xendit;

/**
 * Class InvoiceTest
 *
 * @category Class
 * @package  Xendit
 * @author   Yanuar <yanuaraditia@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class RefundTest extends TestCase
{
    const TEST_RESOURCE_ID = 'xx-232323';


    /**
     * Create Refund test
     * Should pass
     *
     * @return void
     */
    public function testIsCreatable()
    {
        $params = [
            'payment_request_id' => 'samp-2232323',
            'reference_id'       => 'ref-23232m23n',
            'invoice_id'         => 'inv-232323232',
            'currency'           => "IDR",
            'amount'             => 30000,
            'reason'             => 'Cancel Payment',
            'metadata'           => null
        ];

        $this->stubRequest(
            'POST',
            '/refunds',
            $params,
            [],
            $params
        );

        $resource = Refund::create($params);
        $this->assertEquals($resource['payment_request_id'], $params['payment_request_id']);
        $this->assertEquals($resource['reference_id'], $params['reference_id']);
        $this->assertEquals($resource['invoice_id'], $params['invoice_id']);
        $this->assertEquals($resource['amount'], $params['amount']);
    }

    /**
     * Get Refund test
     * Should pass
     *
     * @return void
     */
    public function testIsGettable()
    {
        $this->stubRequest(
            'get',
            '/refunds/' . self::TEST_RESOURCE_ID,
            [],
            [],
            [
                'id' => self::TEST_RESOURCE_ID
            ]
        );

        $resource = Refund::retrieve(self::TEST_RESOURCE_ID);
        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }


    /**
     * GetAll Refund test
     * Should pass
     *
     * @return void
     */
    public function testIsListable()
    {
        $this->stubRequest(
            'GET',
            '/v2/invoices',
            [],
            [],
            [
                'data' => [
                    'id' => self::TEST_RESOURCE_ID
                ]
            ]
        );

        $resources = Refund::retrieveAll();
        $this->assertTrue(is_array($resources['data']));
        $this->assertTrue(array_key_exists('id', $resources['data']));
    }

    /**
     * Create Refund test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testIsCreatableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        $params = [
            'amount' => 10000
        ]; // We remove reason field which required

        Refund::create($params);
    }

    /**
     * Get Refund test
     * Should throw ApiException
     *
     * @return void
     */
    public function testIsGettableThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);

        Refund::retrieve(self::TEST_RESOURCE_ID);
    }

}
