<?php

namespace Xendit\HttpClient;

use Xendit\Exceptions\ApiExceptions;

/**
 * Interface ClientInterface
 *
 * @package Xendit\HttpClient
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
     * @throws ApiExceptions
     */
    public function sendRequest($method,
        string $url,
        array $defaultHeaders,
        $params
    );
}
