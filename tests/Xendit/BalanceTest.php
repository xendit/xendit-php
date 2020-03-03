<?php

/**
 * BalanceTest.php
 * php version 7.2.0
 *
 * @category Test
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Balance;
use Xendit\TestCase;

/**
 * Class BalanceTest
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class BalanceTest extends TestCase
{
    const ACCOUNT_TYPE = 'CASH';
    const AMOUNT = 100000;

    /**
     * Get Balance test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testIsGettable()
    {
        $this->stubRequest(
            'get',
            '/balance?account_type=' . self::ACCOUNT_TYPE,
            [],
            [],
            [
                'balance' => self::AMOUNT
            ]
        );

        $result = Balance::getBalance(self::ACCOUNT_TYPE);
        $this->assertEquals($result['balance'], self::AMOUNT);
    }

    /**
     * Get Balance test
     * Should throw ApiException
     *
     * @return void
     * @throws Exceptions\InvalidArgumentException
     * @throws Exceptions\ApiException
     */
    public function testIsGettableThrowInvalidArgumentException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);

        Balance::getBalance();
    }
}
