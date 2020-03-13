<!DOCTYPE html>
<html>
<head>
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
    </style>
</head>
<body>
    <footer class="w3-container w3-card-4 w3-text-white w3-transparent w3-mobile w3-padding w3-bottom " id="colour">
        <p class="w3-left ">Made With <i class="w3-hover-text-red far fa-heart"></i> By <a class="w3-hover-text-black" id="a" href="index.php">  Play On. </a> </p>
        <p class="w3-right ">
           <!--  <a class="w3-padding w3-hover-text-black" id="a"href="#"><i class="fab fa-instagram"></i> </a>
            <a class="w3-padding w3-hover-text-black" id="a" href="#"><i class="fab fa-facebook-f"></i> </a>
            <a class="w3-padding w3-hover-text-black" id="a" href="#"><i class="fab fa-telegram-plane"></i> </a> 
            <a class="w3-padding w3-hover-text-black" id="a" href="#"><i class="fab fa-twitter"></i> </a>  -->
            <a href="about.php" class="w3-padding w3-hover-text-black" id="a"> About Us </a>
            <a href="policy.php" class="w3-padding w3-hover-text-black" id="a">Privacy Policy</a>
        </p>
    </footer>
</body>
</html>