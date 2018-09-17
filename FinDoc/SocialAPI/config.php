<?php
	session_start();
	require_once  "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("797205039702-lvntq25bbpaa54ahvd09f4fk3cgeqir8.apps.googleusercontent.com");
	$gClient->setClientSecret("82-Arz2cO1wBbTmgF6W-jOtF");
	$gClient->setApplicationName("MediCom");
	$gClient->setRedirectUri("http://localhost/MediCom/findoctor/index.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
