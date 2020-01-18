<?php

namespace Xendit\HttpClient;

require 'vendor\autoload.php';

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Xendit\Xendit;

class GuzzleClient
{
    private static $_instance;

    protected $http;

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
            $baseUri = strval(Xendit::$apiBase);
            $this->http = new Guzzle(
                [
                    'base_uri' => $baseUri,
                    'verify' => false
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
     * @param array  $defaultHeaders
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
        $opts['params'] = $params;

        [$rbody, $rcode, $rheader] = $this->_executeRequest($opts, $url);

        return [$rbody, $rcode, $rheader];
    }

    /**
     * @param array  $opts
     * @param string $url
     *
     * @return array
     */
    private function _executeRequest(array $opts, string $url)
    {
        $headers = $opts['headers'];
        $params = $opts['params'];
        $apiKey = Xendit::$apiKey;
        $url = strval($url);

        try {
            if (count($params) > 0) {
                $response =  $this->http->request(
                    $opts['method'], $url, [
                        'auth' => [$apiKey, ''],
                        'headers' => $headers,
                        RequestOptions::JSON => $params
                    ]
                );
            } else {
                $response =  $this->http->request(
                    $opts['method'], $url, [
                        'auth' => [$apiKey, ''],
                        'headers' => $headers
                    ]
                );
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBody = $response->getBody()->getContents();
        }

        $rbody = $response->getBody();
        $rcode = (int) $response->getStatusCode();
        $rheader = $response->getHeaders();

//        echo('rbody\n');
//        var_dump($rbody);
//        echo('rcode\n');
//        var_dump($rcode);
//        echo('rheader\n');
//        var_dump($rheader);

        return [$rbody, $rcode, $rheader];
    }
}
