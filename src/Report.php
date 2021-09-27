<?php

/**
 * Report.php
 * php version 7.4.0
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

use Xendit\Exceptions\InvalidArgumentException;

/**
 * Class Report
 *
 * @category Class
 * @package  Xendit
 * @author   David <jatinangorservice@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

class Report
{
    use ApiOperations\Request;

    /**
     * Available report type
     *
     * @return array
     */
    public static function reportType()
    {
        return ["BALANCE_HISTORY", "TRANSACTIONS", "UPCOMING_TRANSACTIONS"];
    }

    /**
     * Validation for report type
     *
     * @param string $report_type Report type
     *
     * @return void
     */
    public static function validateReportType($report_type = null)
    {
        if (!in_array($report_type, self::reportType())) {
            $msg = "Report type is invalid. Available types: MANAGED, OWNED";
            throw new InvalidArgumentException($msg);
        }
    }

    /**
     * Generate report
     *
     * @param array  $params reports params
     *
     * @return array
     * https://developers.xendit.co/api-reference/#generate-report
     * @throws Exceptions\ApiException
     */
    public static function generate($params = [])
    {
        $requiredParams = ['type'];

        self::validateParams($params, $requiredParams);
        self::validateReportType($params['type']);

        $url = '/reports';

        return static::_request('POST', $url, $params);
    }

    /**
     * Get report
     *
     * @param string $report_id
     *
     * @return array
     * https://developers.xendit.co/api-reference/#get-report
     * @throws Exceptions\ApiException
     */
    public static function detail(string $report_id)
    {
        $url = '/reports/'.$report_id;

        return static::_request('GET', $url);
    }
}
