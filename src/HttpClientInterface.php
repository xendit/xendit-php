<?php

/**
 * HttpClientInterface.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Stanley Nguyen <stanley@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/xendit/xendit-php/blob/master/src/HttpClientInterface.php
 */

namespace Xendit;


/**
 * Interface HttpClientInterface
 *
 * @category Interface
 * @package  Xendit
 * @author   Stanley Nguyen <stanley@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/xendit/xendit-php/blob/master/src/HttpClientInterface.php
 */
interface HttpClientInterface
{
    /**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string              $method  HTTP method.
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request($method, $uri, array $options = []);
}