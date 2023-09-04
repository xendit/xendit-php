<?php
/**
 * PayoutApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payout Service
 *
 * The version of the OpenAPI document: 1.0.0
 */


namespace Xendit\Test\Api;

use \Xendit\Configuration;
use \Xendit\ApiException;
use \Xendit\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * PayoutApiTest Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for cancelPayout
     *
     * API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED..
     *
     */
    public function testCancelPayout()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for createPayout
     *
     * API to send money at scale to bank accounts & eWallets.
     *
     */
    public function testCreatePayout()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPayoutById
     *
     * API to fetch the current status, or details of the payout.
     *
     */
    public function testGetPayoutById()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPayoutChannels
     *
     * API providing the current list of banks and e-wallets we support for payouts for both regions.
     *
     */
    public function testGetPayoutChannels()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPayouts
     *
     * API to retrieve all matching payouts with reference ID.
     *
     */
    public function testGetPayouts()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
