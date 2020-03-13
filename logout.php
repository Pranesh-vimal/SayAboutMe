<?php
if (isset($_POST['logout'])) {
	require_once "config.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
}
	header('Location: index.php');
	exit();
?>