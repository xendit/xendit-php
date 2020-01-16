<?php

namespace Xendit\ApiOperations;

trait Request
{
    protected static function _validateParams($params = null)
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
    protected static function _request($method, $url, $params, $headers)
    {
        $requestor = new \Xendit\ApiRequestor();
        list($response) = $requestor->request($method, $url, $params, $headers);
        return [$response];
    }
}