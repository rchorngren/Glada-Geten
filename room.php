﻿<?php 
    $db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
    //$db = mysqli_connect('localhost', 'root', '', '219291-gg');
    mysqli_query($db, "SET NAMES utf8");
?>
<!DOCTYPE html>
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
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-small">
                    <img class="img-room" src="img/enkelrum.jpeg" alt="" />
                    <!-- <span class="card-title">Lyx</span> -->
                </div>
                <div class="card-content">
                    <span class="room-title">
                        <?php 
                            $query = "SELECT * FROM pages WHERE id=3";
                            $pages_result = mysqli_query($db, $query);
                            $page = mysqli_fetch_assoc($pages_result);
                            echo $page['main_heading']; 
                        ?> 
                    </span>
                    <p>
                        <ul class="room-specs">
                            <li><?php echo $page['page_content1']; ?></li>
                            <li><?php echo $page['page_content2']; ?></li>
                            <li><?php echo $page['page_content3']; ?></li>
                            <li><?php echo $page['page_content4']; ?></li>
                            <li><?php echo $page['page_content5']; ?></li>
                            <li><?php echo $page['page_content6']; ?></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-small">
                    <img class="img-room" src="img/dubbelrum.jpeg" alt="" />
                    <!-- <span class="card-title">Standard</span> -->
                </div>
                <div class="card-content">
                    <span class="room-title">
                        <?php 
                            $query = "SELECT * FROM pages WHERE id=4";
                            $pages_result = mysqli_query($db, $query);
                            $page = mysqli_fetch_assoc($pages_result);
                            echo $page['main_heading']; 
                        ?> 
                    </span>
                    <p>
                        <ul class="room-specs">
                            <li><?php echo $page['page_content1']; ?></li>
                            <li><?php echo $page['page_content2']; ?></li>
                            <li><?php echo $page['page_content3']; ?></li>
                            <li><?php echo $page['page_content4']; ?></li>
                            <li><?php echo $page['page_content5']; ?></li>
                            <li><?php echo $page['page_content6']; ?></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-small">
                    <img class="img-room" src="img/room1.jpeg" alt="" />
                    <!-- <span class="card-title">Standard</span> -->
                </div>
                <div class="card-content">
                    <span class="room-title">
                        <?php 
                            $query = "SELECT * FROM pages WHERE id=5";
                            $pages_result = mysqli_query($db, $query);
                            $page = mysqli_fetch_assoc($pages_result);
                            echo $page['main_heading']; 
                        ?> 
                    </span>
                    <p>
                        <ul class="room-specs">
                            <li><?php echo $page['page_content1']; ?></li>
                            <li><?php echo $page['page_content2']; ?></li>
                            <li><?php echo $page['page_content3']; ?></li>
                            <li><?php echo $page['page_content4']; ?></li>
                            <li><?php echo $page['page_content5']; ?></li>
                            <li><?php echo $page['page_content6']; ?></li>
                            <li><?php echo $page['page_content7']; ?></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p class="field-block-btn">
        <a class="booking-btn" href="booking.php">Boka rum</a>
    </p>
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
