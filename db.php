<?php 

$servername ="sql106.epizy.com";
$dbUser = "epiz_23933252";
$dbPass = "kavithakps1";
$dbName = "epiz_23933252_sam";

$con = mysqli_connect("$servername","$dbUser","$dbPass","$dbName");

if(!$con){
	die("connection failed : ".mysqli_connect_error());
}

?>