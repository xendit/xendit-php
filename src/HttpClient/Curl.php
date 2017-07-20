<?php

namespace XenditClient\HttpClient;

use XenditClient\Helper\Util;


class Curl {
	private $secret_api_key;

	public function __construct($secret_api_key)
	{
		$this->secret_api_key = $secret_api_key;
	}


	/**
	 * [request description]
	 * @return [type] [description]
	 */
	public function request($method, $url, $headers, $params = null)
	{
		$curl = curl_init();
		$method = strtolower($method);
		$opts = array();

		if ($method == 'get') {
		    $opts[CURLOPT_HTTPGET] = 1;
		    
		    if (count($params) > 0) {
		        $encoded = Util::urlEncode($params);
		        $url = "$url?$encoded";
		    }
		} elseif ($method == 'post') {
			$opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = Util::urlEncode($params);
		}

		$opts[CURLOPT_HTTPHEADER] = $headers;
		$opts[CURLOPT_USERPWD] = $this->secret_api_key.":";
		$opts[CURLOPT_URL] = $url;
		$opts[CURLOPT_RETURNTRANSFER] = true;

		curl_setopt_array($curl, $opts);
		$response = curl_exec($curl);
		curl_close($curl);

		$responseObject = json_decode($response, true);

		return $responseObject;             
	}
}