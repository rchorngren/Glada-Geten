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

    <!-- Fancybox gallery -->
    <link rel="stylesheet" type="text/css" href="gallery/css-plugin/slide.css">
    <link rel="stylesheet" href="gallery/source/jquery.fancybox.css" type="text/css" media="screen" />
</head>
<body>

<header class="site-header">
    <a href="index.html">
        <h1>Den glada geten</h1>
    </a>

    <a href="#nav" title="meny" class="toggle-nav" id="toggle-nav">
    <span></span>
    <span></span>
    <span></span>
    </a>

    <nav id="nav" class="site-nav">
        <ul class="site-ul">
            <li><a href="index.html">Hem</a></li>
            <li><a href="booking.html">Boka rum</a></li>
            <li class="has-dropdown"><a class="arrow-down" href="#about">Om oss</a>
                <ul id="about" class="dropdown hidden">
                    <li><a href="about.html">Om oss</a></li>
                    <li><a href="room.html">Våra rum</a></li>
                    <li><a href="gallery.php">Galleri</a></li>
                    <li><a href="price.html">Priser</a></li>
                    <li><a href="activity.html">Aktiviteter</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Kontakt</a></li>
        </ul>
    </nav>
</header>


<div class="site-wrapper">
    <section id="content">
		<div class="gallery">
		<ul>


		<?php

		$handle = opendir(dirname(realpath(__FILE__)).'/picgallery/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){


                echo '<li><a class="fancybox" rel="group" href="picgallery/'.$file.'"><img src="picgallery/'.$file.'" border="0" /></a></li>';


            }
        }

		?>
		</ul>

		</div>
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


<!-- Add fancyBox -->
<script type="text/javascript" src="gallery/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(".fancybox").fancybox();
</script>

</body>
</html>