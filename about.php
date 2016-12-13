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
    <section class="about-wrapper">
        <section class="section-about">
            <h1 class="about-h1">Om Den glada geten, en B&amp;B</h1>
            <img class="img-bubble-left" src="img/img-get1.jpg" alt="Geten Gösta" />
            <p>
                Den glada geten ligger beläget i det natursköna området Tjärnholmen
                i Norrbotten. Utöver smakfullt inredda rum finns även aktiveter att
                boka in under din vistelse. Gården är en gammal släktgård, som 2005
                gjordes om till B&amp;B och har sedan dess lockat besökare från hela
                Sverige och även världen.

            </p>

            <img class="img-bubble-right" src="img/img-get2.jpg" alt="Geten Selm" />
            <p>
                På den glada geten har vi två ”husgetter”, Gösta och Selma, som håller
                till i en liten hage alldeles bredvid gårdshuset. Kring gården finns
                även trevliga vandringsslingor och vågar min sig på ett dopp i älven
                kan man boka bastu på den glada geten efter det svalkande doppet.
            </p>
            <p>Du kan välja att delta i våra
                <a class="activity-reference" href="activity.php">aktiviteter.</a>
            </p>
            <p>
                Samtliga rum på den glada geten har härliga sänglinnen i percale,
                som utlovar en härlig och sval natts sömn. Det finns även Wifi i alla
                rum (även om vi på glada geten förespråkar en nedkopplad tillvaro med
                nära naturupplevelser framför internet), minibar, vattenkokare, handdukar
                och badlakan och vår alldeles egna handgjorda tvål att använda i badkaret
                eller duschen!
                Familjerumen har även öppenspis.
            </p>
        </section>
    </section>
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


<script src="script/jquery-3.1.0.min.js"></script>
<script src="script/main.js"></script>

</body>
</html>
