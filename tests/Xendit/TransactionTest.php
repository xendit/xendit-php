<?php

/**
 * TransactionTest.php
 * php version 7.4.0
 *
 * @category Test
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Transaction;
use Xendit\TestCase;

/**
 * Class TransactionTest
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class TransactionTest extends TestCase
{
    /**
     * Get list of transactions test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testListIsGettable()
    {
        $expectedResponse = [
            'has_more' => false
        ];

        $this->stubRequest(
            'GET',
            '/transactions',
            [],
            [],
            $expectedResponse
        );

        $result = Transaction::list();
        $this->assertEquals($result['has_more'], $expectedResponse['has_more']);
    }

    /**
     * Get detail of transactions test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testDetailIsGettable()
    {
        $expectedResponse = [
            'id' => 'txn_4b401a5f-47b1-4aab-8136-f7c4440d571f'
        ];

        $this->stubRequest(
            'GET',
            '/transactions/txn_4b401a5f-47b1-4aab-8136-f7c4440d571f',
            [],
            [],
            $expectedResponse
        );

        $result = Transaction::detail('txn_4b401a5f-47b1-4aab-8136-f7c4440d571f');
        $this->assertEquals($result['id'], $expectedResponse['id']);
    }

    /**
     * Get list of transactions test
     * Should throw ApiException
     *
     * @return void
     */
    public function testListIsGettableThrowsException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Transaction::list();
    }

    /**
     * Get detail of transactions test
     * Should throw ApiException
     *
     * @return void
     */
    public function testDetailIsGettableThrowsException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Transaction::detail('txn_4b401a5f-47b1-4aab-8136-f7c4440d571f');
    }
}
