<?php

require('config/xendit_php_client_config.php');
	
$autoloadPath = '../vendor/autoload.php';

if (file_exists($autoloadPath)) {
  	require($autoloadPath);
} else {
	require('XenditPHPClient.php');
	require('HttpClient/Curl.php');
	require('Helper/Util.php');
}