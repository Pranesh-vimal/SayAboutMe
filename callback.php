<?php
	require_once "config.php";
	require 'db.php';
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: index.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$id = $_SESSION['id'] = $userData['id'];
	$email = $_SESSION['email'] = $userData['email'];
	$gender = $_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$lname = $_SESSION['familyName'] = $userData['familyName'];
	$fname = $_SESSION['givenName'] = $userData['givenName'];

	$query =  "SELECT * from login WHERE email = '$email'";
		$query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			header("location: main.php");
			exit();
		}	

		else
		{
			$query = "INSERT into login VALUES('','$id','$email','$fname','$lname')";
			$query_run = mysqli_query($con,$query);

			if($query_run)
			{
				header("location: main.php");
				exit();
			}
			else
			{
				header("location: index.php");
			}
		}	

 ?>
