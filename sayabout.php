<?php 
        session_start();
        require 'db.php';

        if (isset($_GET['id'])) {
            $id = $_SESSION['id'] =  $_GET['id'];
            $query =  "SELECT * from login WHERE gid = '$id'";
            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)==0)
            {
                header("location: index.php");
                exit();
            }   
            else{
                $query =  "SELECT * from login WHERE gid = '$id'";
                $query_run = mysqli_query($con,$query);
                while($rows = mysqli_fetch_assoc($query_run))
                {
                    $fname = $rows['fname']; 
                    $lname = $rows['lname'];
                }
            }

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
            <p class="w3-large w3-tag w3-round-large w3-red">Hi You Say About <?php if (empty($_GET['id'])) {
              header("location: index.php");
            }
            else{
                echo $fname." ".$lname;
            }
        ?> </p>
        </header>
        
        </div>
        <div class="w3-comtainer w3-quarter">
            
        </div>
    </div>
    <div class="w3-center w3-panel w3-padding">
        
    </div>
    <div class=" w3-container w3-row">
        <div class="w3-container w3-quarter">
            
        </div>
        <div class="w3-panel w3-half w3-card-4 w3-round-large w3-center">
        <form action="inc/letter.php" method="post">
            <textarea class=" w3-text-red w3-border w3-round-large w3-panel w3-padding" name="letter" placeholder="Write Something..." cols="30" rows="10"></textarea><br>

            <input class="w3-panel w3-center w3-padding w3-round-large w3-btn w3-blue w3-text-white" type="submit" name="send" value="Send !" >
        </form>
        </div>
        <div class="w3-comtainer w3-quarter">
            
        </div>
    </div>
    <div  class="w3-padding-64">
        
    </div>

 </body>
 </html>

