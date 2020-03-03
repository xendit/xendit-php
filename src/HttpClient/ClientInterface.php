<?php

/**
 * ClientInterface.php
 * php version 7.2.0
 *
 * @category Interface
 * @package  Xendit\HttpClient
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit\HttpClient;

use Xendit\Exceptions\ApiException;

/**
 * Interface ClientInterface
 *
 * @category Interface
 * @package  Xendit\HttpClient
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
interface ClientInterface
{
    /**
     * Create a request to execute in _executeRequest
     *
     * @param string $method         request method
     * @param string $url            url
     * @param array  $defaultHeaders request headers
     * @param array  $params         parameters
     *
     * @return array
     * @throws ApiException
     */
    public function sendRequest($method,
        string $url,
        array $defaultHeaders,
        $params
    );
}
