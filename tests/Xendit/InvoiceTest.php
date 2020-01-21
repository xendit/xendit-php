<?php

use Xendit\Invoice;
use Xendit\TestCase;

/**
 * Class InvoiceTest
 *
 * @package Xendit
 */
class InvoiceTest extends TestCase
{
    const TEST_RESOURCE_ID = "5e2554f8ec17a6231c0120a9";

    public function testIsCreatable()
    {
        $this->expectsRequest(
            'POST',
            '/v2/invoices'
        );

        $params = [
            'external_id' => 'demo_147580196270',
            'payer_email' => 'sample_email@xendit.co',
            'description' => 'Trip to Bali',
            'amount' => 32000
        ];

        $resource = Invoice::create($params);
        $this->assertEquals($resource['external_id'], $params['external_id']);
        $this->assertEquals($resource['payer_email'], $params['payer_email']);
        $this->assertEquals($resource['description'], $params['description']);
        $this->assertEquals($resource['amount'], $params['amount']);
    }

    public function testIsGettable()
    {
        $this->expectsRequest(
            'GET',
            '/v2/invoices/' . self::TEST_RESOURCE_ID
        );
        $resource = Invoice::retrieve(self::TEST_RESOURCE_ID);
        $this->assertEquals($resource['id'], self::TEST_RESOURCE_ID);
    }

    public function testIsListable()
    {
        $this->expectsRequest(
            'GET',
            '/v2/invoices'
        );
        $resources = Invoice::retrieveAll();
        $this->assertTrue(is_array($resources));
        $this->assertTrue(array_key_exists('id', $resources[0]));
    }

    public function testIsExpirable()
    {
        $this->expectsRequest(
            'POST',
            '/invoices/' . self::TEST_RESOURCE_ID . '/expire!'
        );
        $resources = Invoice::expireInvoice(self::TEST_RESOURCE_ID);
        $this->assertEquals($resources['status'], 'EXPIRED');
        $this->assertEquals($resources['id'], self::TEST_RESOURCE_ID);
    }
}
