﻿<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Den glada geten - Bed &amp; Breakfast</title>
    <meta name="copyright" content="http://www.dengladageten.com">
    <meta name="author" content="Grupp 8 - Octagon">
    <meta name="description" content="Välkommen till Den glada geten, en Bed and Breakfast ute på landsbygden för alla som vill samla sina krafter.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400i|Open+Sans:400,700" rel="stylesheet">
</head>
<body>

<header class="site-header">
    <a href="index.php">
        <h1>Den glada geten</h1>
    </a>

    <a href="#nav" title="meny" class="toggle-nav" id="toggle-nav">
    <span></span>
    <span></span>
    <span></span>
    </a>

    <nav id="nav" class="site-nav">
        <ul class="site-ul">
            <li><a href="index.php">Hem</a></li>
            <li><a href="booking.php">Boka rum</a></li>
            <li class="has-dropdown"><a class="arrow-down" href="#about">Om oss</a>
                <ul id="about" class="dropdown hidden">
                    <li><a href="about.php">Om oss</a></li>
                    <li><a href="room.php">Våra rum</a></li>
                    <li><a href="gallery.php">Galleri</a></li>
                    <li><a href="price.php">Priser</a></li>
                    <li><a href="activity.php">Aktiviteter</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
    </nav>
</header>

<div class="site-wrapper">
    <div class="goole-maps">
        <!-- <h3>My Google Maps Demo</h3> -->
         <div id="map"></div>
    </div>

    <div class="contact-info">
        <div class="contact-info-section">
            <a href="https://www.google.se/maps/place/Tjärnholmsvägen+91,+954+42+Södra+Sunderbyn/@65.6849464,21.8734874,17z/data=!3m1!4b1!4m5!3m4!1s0x467f67657e3d9059:0x1b52d8b8c33fff7c!8m2!3d65.6849464!4d21.8756814" target="_blank">
            <img class="location" src="icons/iconmonstr-location-1.svg" alt="hitta hit" /></a>

            <span>Bed &amp; Breakfast</span>
            <span>Den glada geten</span>
            <span>Tjärnholmsvägen</span>
            <span>954 42 Södra Sunderbyn</span>
        </div>


        <div class="contact-info-section">
            <a href="mailto:glada.geten@kyh.se">
                <img class="mail" src="icons/iconmonstr-email-4.svg" alt="" />
                <span>glada.geten@kyh.se</span>
            </a>
        </div>

        <div class="contact-info-section">
            <a href="tel:+46123456789">
                <img class="phone" src="icons/iconmonstr-phone-1.svg" alt="" />
                <span>(+46) 123 - 456 789</span>
            </a>
        </div>
</div>

<footer class="site-footer">
    <div class="compatible">
        <img class="dektop" src="icons/iconmonstr-computer-5.svg" alt="">
        <img class="tablet" src="icons/iconmonstr-tablet-1.svg" alt="">
        <img class="mobile" src="icons/iconmonstr-smartphone-3.svg" alt="">
    </div>

    <p>
        &copy; Den glada geten - Bed &amp; Breakfast 2016. All rights reserved.
    </p>
</footer>

<!-- Google maps -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi6nc1q8yV_vnUZA6cRMxmtS9OITBXr_o&callback=initMap">
</script>

<script src="script/jquery-3.1.0.min.js"></script>
<script src="script/main.js"></script>

</body>
</html>
