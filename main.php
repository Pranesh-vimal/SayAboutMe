<?php
	session_start();
    require 'db.php';

    $id = $_SESSION['id'];
	if (!isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
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
    <div class=" w3-container w3-row">
        <div class="w3-container w3-quarter">
            
        </div>
        <div class="w3-container w3-half w3-card-4 w3-round-large w3-center">
        <header class="w3-panel w3-text-red  w3-center"> 
            <p class="w3-large w3-tag w3-round-large w3-red">Hi <?php echo $_SESSION['givenName'] ; echo '&nbsp;';  echo $_SESSION['familyName'];  ?> </p>
        </header>
        <div class="w3-center w3-panel "> 
        	<p  class="w3-orange w3-round-large w3-text-white w3-panel w3-center ">
        		Share This Link To Your Friends And Know What They Are Thinking About You !
            </p>
            <input type="text" value="http://sayaboutme.ga/sayabout.php?id=<?php echo $_SESSION['id'] ?>" id="myInput" class="w3-container w3-center w3-round-large w3-padding" >
            <button class="w3-light-green w3-btn w3-round-large w3-panel w3-padding" id="copy" onclick="myFunction()">Copy text</button>
        </p>        

        </div>
        </div>
        <div class="w3-comtainer w3-quarter">
            
        </div>
    </div>

    <div class=" w3-panel w3-padding w3-row">
        <div class="w3-container w3-quarter">
            
        </div>
        <div class="w3-container w3-half w3-card-4 w3-round-large w3-center">
            <p  class="w3-blue w3-round-large w3-text-white w3-panel w3-center ">
                Reload the page to see new feeds !
            </p>
        <?php 

                $query = "SELECT * from letter where gid = '$id'";
                $result = mysqli_query($con,$query);

                while($rows = mysqli_fetch_assoc($result))
                {     

                ?>

                <p class="w3-padding w3-panel w3-center w3-border w3-text-white w3-indigo w3-round-large"><?php echo $rows['letter']; ?> 
                </p>
                <br>                
                  
                  <?php  
                }
         ?>
        </div>
        <div class="w3-comtainer w3-quarter">
            
        </div>
    </div>

    <div class=" w3-panel w3-padding w3-row">
        <div class="w3-container w3-quarter">
            
        </div>
        <div class="w3-container w3-half w3-card-4 w3-round-large w3-center">
        <form action="logout.php" method="post">
            <input class="w3-panel w3-padding w3-btn w3-blue w3-text-white w3-center w3-round-large" type="submit" name="logout" value="Logout">
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
   <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  document.getElementById("copy").innerHTML = "Link Copied !";
}
</script>
 </body>
 </html>