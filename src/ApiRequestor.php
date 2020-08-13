<?php

/**
 * ApiRequestor.php
 * php version 7.2.0
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

namespace Xendit;

/**
 * Class ApiRequestor
 *
 * @category Class
 * @package  Xendit
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */
class ApiRequestor
{
    private static $_httpClient;

    /**
     * Send request and processing response
     *
     * @param string $method  request method (get, post, patch, etc)
     * @param string $url     base url
     * @param array  $params  user's params
     * @param array  $headers user's additional headers
     *
     * @return array
     * @throws Exceptions\ApiException
     */
    public function request($method, $url, $params = [], $headers = [])
    {
        list($rbody, $rcode, $rheaders)
            = $this->_requestRaw($method, $url, $params, $headers);

        return json_decode($rbody, true);
    }

    /**
     * Set must-have headers
     *
     * @param array $headers user's headers
     *
     * @return array
     */
    private function _setDefaultHeaders($headers)
    {
        $defaultHeaders = [];
        $lib = 'php';
        $libVersion = Xendit::getLibVersion();

        $defaultHeaders['Content-Type'] = 'application/json';
        $defaultHeaders['xendit-lib'] = $lib;
        $defaultHeaders['xendit-lib-ver'] = $libVersion;

        return array_merge($defaultHeaders, $headers);
    }

    /**
     * Send request from client
     *
     * @param string $method  request method
     * @param string $url     additional url to base url
     * @param array  $params  user's params
     * @param array  $headers request' headers
     *
     * @return array
     * @throws Exceptions\ApiException
     */
    private function _requestRaw($method, $url, $params, $headers)
    {
        $defaultHeaders = self::_setDefaultHeaders($headers);
        
        $response = $this->_httpClient()->sendRequest(
            $method,
            $url,
            $defaultHeaders,
            $params
        );

        $rbody = $response[0];
        $rcode = $response[1];
        $rheaders = $response[2];

        return [$rbody, $rcode, $rheaders];
    }

    /**
     * Create HTTP CLient
     *
     * @return HttpClient\GuzzleClient
     */
    private function _httpClient()
    {
        if (!self::$_httpClient) {
            self::$_httpClient = HttpClient\GuzzleClient::instance();
        }
        return self::$_httpClient;
    }

    /**	
     * GuzzleClient Setter	
     *	
     * @param HttpClient\GuzzleClient $client client	
     *	
     * @return void	
     */	
    public static function setHttpClient($client)	
    {	
        self::$_httpClient = $client;	
    }
}
