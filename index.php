<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-landingspage.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>FoodSavers</title>
    <script type="text/javascript" src="js/product-jq.js"></script>
</head>
<body onload="getLocation()">

<?php
    include "hamburger-menu.php";
?>  
    <!--NAVBAR-->
    <div class="landingspage-container animated fadeIn slower">
        <div class="landingspage-bg-image">
            <div class="landingspage-navbar">
                <div class="navbar-logo animated bounceInUp">
                    <img src="images/logo-foodsavers.png" alt="logo">
                </div>
                <div class="navbar-hamburger-menu animated bounceInUp">
                    <span onclick="openNav()">&#9776;</span>
                </div>
                
            </div>
            <!--HEADER SEARCHFIELD-->
            <div class="landingspage-searchfield-container">
                <div class="landingspage-title-and-searchfield">
                    <h2>Zoek op postcode:</h2>
                    <input id="query" type="text" name="postalcode" onkeypress="if (event.keyCode == 13) zoeknu('index');" placeholder="Search.." autocomplete="off">
                    <p class="phid" id="lat">aa</p>
                    <p class="phid" id="lon">sas</p>
                </div>   
            </div>           
        </div>
    </div>
    <!-- <div id="landingspage-info-section-container">
        <div class="landingspage-info-section-image">
        </div>
            <h3>Zo werkt FoodSavers</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magnam dignissimos quam excepturi voluptatem iste, odio maxime repellat dolores. Voluptatem.</p>
       
    </div> -->

<script type="text/javascript" src="js/maps.js"></script>
<script type="text/javascript">
var lat = document.getElementById("lat");
var lon = document.getElementById("lon");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    lat.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  lat.innerHTML = position.coords.latitude;
  // console.log(lat)
  lon.innerHTML = position.coords.longitude;



              $.ajax({
                type:'POST',
                url:'setsession.php',
                data:{lat:position.coords.latitude, lon:position.coords.longitude},
                success: function(data){
                    if(data=="YES"){
                         console.log('YESaass')
                        }else{
                            console.log('NOoooo')
                        }
                    console.log(data); 
               }
                })
}

</script>
</body>
</html>