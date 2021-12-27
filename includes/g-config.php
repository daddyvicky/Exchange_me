<?php
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("");
	$gClient->setClientSecret("");
	$gClient->setApplicationName("ExchangeMe Client");
	$gClient->setRedirectUri("http://localhost/exchange/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>