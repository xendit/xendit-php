<?php

/**
 * DisbursementsChannelsTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\DisbursementChannels;
use Xendit\TestCase;

/**
 * Class DisbursementsChannelsTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class DisbursementsChannelsTest extends TestCase
{
    const CHANNEL_CATEGORY = "BANK";
    const CHANNEL_CODE = "PH_CIMB";


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

        $result = DisbursementChannels::getDisbursementChannels();
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

        $result = DisbursementChannels::getDisbursementChannelsByChannelCategory(self::CHANNEL_CATEGORY);
        $this->assertEquals($result[0]['channel_category'], $expectedResponse[0]['channel_category']);
        $this->assertEquals($result[1]['channel_category'], $expectedResponse[1]['channel_category']);
        $this->assertCount(2, $result);
    }

    /**
     * Get Disbursement Channels by Channel Category test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCategoryThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        DisbursementChannels::getDisbursementChannelsByChannelCategory(null);
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

        $result = DisbursementChannels::getDisbursementChannelsByChannelCode(self::CHANNEL_CODE);
        $this->assertEquals($result[0]['channel_code'], $expectedResponse[0]['channel_code']);
        $this->assertCount(1, $result);
    }

    /**
     * Get Disbursement Channels by Channel Code test
     * Should throw ApiException
     *
     * @return void
     * @throws \Xendit\Exceptions\ApiException
     */
    public function testIsGettableDisbursementChannelsByChannelCodeThrowApiException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        DisbursementChannels::getDisbursementChannelsByChannelCode(null);
    }
}
