 <?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: main.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Say About Me </title>
 	<link rel="stylesheet" type="text/css" href="css/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style type="text/css">
        body{
            font-family: 'Kanit', sans-serif;
        }
        #colour{
            -webkit-animation: bgcolor 20s infinite;
            animation: bgcolor 10s infinite;
            -webkit-animation-direction: alternate;
            animation-direction: alternate;
            }

        #border{
                border: 3px solid orange;
            }

        #a{
            text-decoration-line: none;
        }   

            @keyframes bgcolor {
    0% {
        background-color: #45a3e5
    }

    30% {
        background-color: #66bf39
    }

    60% {
        background-color: #eb670f
    }

    90% {
        background-color: #f35
    }

    100% {
        background-color: #864cbf
    }

}
input{
	outline: none;
}
img{
	height: 50px;
	width: auto;
}
    </style>
 </head>
 <body>
 <?php 
 require 'header.php';
  ?>	

<div  class="w3-padding-64">
        
    </div>
    <div  class="w3-padding-32">
        
    </div>
    <div class=" w3-container w3-row">
        <div class="w3-container w3-quarter">
            
        </div>
        <div class="w3-container w3-half w3-card-4 w3-round-large">
        <header class="w3-panel w3-text-red  w3-center"> 
            <p class="w3-large w3-tag w3-round-large w3-red"> Login </p>
        </header>
        <form class="w3-container w3-center" action="include/login.inc.php" method="post">
        <img class="w3-panel w3-hide-small" src="img/google.jpg">	
          <input class="w3-center w3-panel w3-padding w3-round-large w3-blue w3-text-white  " type="button" onclick="window.location = '<?php echo $loginURL ?>';" name="login" value="Login With Google">
        </form>
        </div>
        <div class="w3-comtainer w3-quarter">
            
        </div>
    </div>
    <div  class="w3-padding-64">
        
    </div>

  <?php 
require 'footer.php';
   ?>
 </body>
 </html>