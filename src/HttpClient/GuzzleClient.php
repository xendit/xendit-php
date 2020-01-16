<?php

namespace Xendit\HttpClient;

use GuzzleHttp\Client as Guzzle;
use Xendit\Xendit;

class GuzzleClient
{
    private static $_instance;

    protected $http;

    protected $userAgentInfo;

    /**
     * XenditClient constructor.
     *
     * @param Guzzle|null $http client
     */
    public function __construct(Guzzle $http = null)
    {
        if ($http) {
            $this->http = $http;
        } else {
            $this->http = new Guzzle(
                [
                'base_url' => [\Xendit\Xendit::$apiBase]
                ]
            );
        }
    }

    /**
     * @return GuzzleClient
     */
    public static function instance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * @param $method
     * @param string $url
     * @param array $defaultHeaders
     * @param $params
     *
     * @return array
     */
    public function sendRequest($method, string $url, array $defaultHeaders, $params)
    {
        $method = strtoupper($method);

        $opts = [];

        $opts['method'] = $method;
        $opts['headers'] = $defaultHeaders;

        list($rbody, $rcode, $rheader) = (string) $this->_executeRequest($opts, $url);

        return [$rbody, $rcode, $rheader];
    }

    /**
     * @param array $opts
     * @param string $url
     *
     * @return array
     */
    private function _executeRequest(array $opts, string $url)
    {
        $headers = $opts['headers'];
        $apiKey = Xendit::$apiKey;
        $response =  $this->http->request(
            $opts['method'], $url, [
            'auth' => [$apiKey, ''],
            'headers' => $headers
            ]
        );

        $rbody = (string) $response->getBody();
        $rcode = (int) $response->getStatusCode();
        $rheader = $response->getHeaders();

        return [$rbody, $rcode, $rheader];
    }
}
