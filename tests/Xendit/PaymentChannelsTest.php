<?php

/**
 * PaymentChannelsTest.php
 * php version 7.4.0
 *
 * @category Test
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\PaymentChannels;
use Xendit\TestCase;

/**
 * Class PaymentChannelsTest
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class PaymentChannelsTest extends TestCase
{
    /**
     * Get list of payment channel test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testListIsGettable()
    {
        $expectedResponse = [
            'channel_code' => false
        ];

        $this->stubRequest(
            'GET',
            '/payment_channels',
            [],
            [],
            $expectedResponse
        );

        $result = PaymentChannels::list();
        $this->assertEquals($result['channel_code'], $expectedResponse['channel_code']);
    }
}
