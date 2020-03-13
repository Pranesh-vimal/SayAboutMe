<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("662322680117-92q93kjs4eif2u6tumc7a4fl8joaqej3.apps.googleusercontent.com");
	$gClient->setClientSecret("OEmC_VgUfrF8XRpYv6X7MVkb");
	$gClient->setApplicationName("Say About Me");
	$gClient->setRedirectUri("http://sayaboutme.ga/callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
