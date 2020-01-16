<?php

namespace Xendit;

class ApiRequestor
{
    private static $_httpClient;

    /**
     * @param $method
     * @param $url
     * @param $params
     * @param $headers
     *
     * @return mixed
     */
    public function request($method, $url, $params = [], $headers = [])
    {
        list($rbody, $rcode, $rheaders)
            = $this->_requestRaw($method, $url, $params, $headers);

        //TODO: interpret response

        return $response;
    }

    /**
     * @param $headers
     * @return array
     */
    private function _setDefaultHeaders($headers)
    {
        $defaultHeaders = [];
        $lib = 'php';
        $libVersion = phpversion();

        $defaultHeaders['Content-Type'] = 'application/json';
        $defaultHeaders['xendit-lib'] = $lib;
        $defaultHeaders['xendit-lib-ver'] = $libVersion;

        return array_merge($defaultHeaders, $headers);
    }

    /**
     * @param $method
     * @param $url
     * @param $params
     * @param $headers
     * @return array
     */
    private function _requestRaw($method, $url, $params, $headers)
    {
        $apiKey = Xendit::$apiKey;

        if (!$apiKey) {
            // throw exception
        }

        $defaultHeaders = self::_setDefaultHeaders($headers);

        list($rbody, $rcode, $rheaders) = $this->httpClient()->sendRequest(
            $method,
            $url,
            $defaultHeaders,
            $params
        );

        return [$rbody, $rcode, $rheaders];
    }

    /**
     * @return HttpClient\GuzzleClient
     */
    private function httpClient()
    {
        if (!self::$_httpClient) {
            self::$_httpClient = HttpClient\GuzzleClient::instance();
        }
        return self::$_httpClient;
    }

}