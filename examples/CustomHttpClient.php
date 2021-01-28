<?php

/**
 * BalanceExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Dotenv\Dotenv;
use Xendit\Xendit;
use Xendit\HttpClientInterface;
use GuzzleHttp\Client as Guzzle;

require 'vendor/autoload.php';

class HttpCliImp implements HttpClientInterface {
    private $_guzz;

    public function __construct(Guzzle $guzz)
    {
        $this->_guzz = $guzz;
    }
    public function request($method, $uri, array $options = [])
    {
        return $this->_guzz->request($method, $uri, $options);
    }
}

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
Xendit::setApiKey(getenv('SECRET_API_KEY'));
Xendit::setHttpClient(new HttpCliImp(new Guzzle(
    [
        'base_uri' => Xendit::$apiBase,
        'verify' => false,
        'timeout' => 60
    ]
    )));

$getBalance = \Xendit\Balance::getBalance('CASH');
var_dump($getBalance);
