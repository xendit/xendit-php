<?php

/**
 * ReportTest.php
 * php version 7.4.0
 *
 * @category Test
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Report;
use Xendit\TestCase;

/**
 * Class ReportTest
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class ReportTest extends TestCase
{
    /**
     * Generate report test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testReportIsCreatetable()
    {
        $expectedResponse = [
            'type' => 'TRANSACTIONS'
        ];

        $this->stubRequest(
            'POST',
            '/reports',
            $expectedResponse,
            [],
            $expectedResponse
        );

        $result = Report::generate($expectedResponse);
        $this->assertEquals($result['type'], $expectedResponse['type']);
    }

    /**
     * Get detail of report test
     * Should pass
     *
     * @return void
     * @throws Exceptions\ApiException
     */
    public function testDetailIsGettable()
    {
        $expectedResponse = [
            'id' => 'report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28'
        ];

        $this->stubRequest(
            'GET',
            '/reports/report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28',
            [],
            [],
            $expectedResponse
        );

        $result = Report::detail('report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28');
        $this->assertEquals($result['id'], $expectedResponse['id']);
    }

    /**
     * Generate report test
     * Should throw InvalidArgumentException
     *
     * @return void
     */
    public function testReportIsCreatetableThrowsException()
    {
        $this->expectException(\Xendit\Exceptions\InvalidArgumentException::class);
        Report::generate();
    }

    /**
     * Get detail of report test
     * Should throw ApiException
     *
     * @return void
     */
    public function testDetailIsGettableThrowsException()
    {
        $this->expectException(\Xendit\Exceptions\ApiException::class);
        Report::detail('report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28');
    }
}
