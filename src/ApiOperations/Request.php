<?php

namespace Xendit\ApiOperations;

trait Request
{
    protected static function _validateParams($params = [])
    {
        // TODO: validation params
    }

    /**
     * @param $method  string
     * @param $url     string ext url to the API
     * @param $params  array parameters
     * @param $headers array customer's optional headers
     *
     * @return array
     */
    protected static function _request($method, $url, $params = [], $headers = [])
    {
        // TODO: validate params before request

        $requestor = new \Xendit\ApiRequestor();
        $response = $requestor->request($method, $url, $params, $headers);
        return $response;
    }
}