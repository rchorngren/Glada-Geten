<!DOCTYPE html>
		<html>
		<head>
			<title>Booking</title>
			<meta charset='utf-8' />
			<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>
		<body>
		
<?php	
	// Uppkoppling till DB
$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');//--------------- skicka data till DB ---------------------------------------
					
	if ( isset ($_POST['boka']) ) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$zipCode = $_POST['zipCode'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$arrives = $_POST['arrives'];
		$departs = $_POST['departs'];
		$select = $_POST['select'];
		$other = $_POST['other'];
		
		//var_dump ($activity1);
		if (empty ($_POST['activity'])) {	
			$activity_string = "";
		} else {
			$activity_string = implode (", ", $_POST['activity']);
		}
		?>
		
		<?php
		echo "
			<form class='booking' method='post' action='' >
				<p>
					Namn: $firstName
					<input type='hidden' name='firstName' value='$firstName' >
				</p>
				<p>
					Efternamn: $lastName
					<input type='hidden' name='lastName' value='$lastName' >
				</p>
				<p>
					Epost: $email
					<input type='hidden' name='email' value='$email' >
				</p>
				<p>
					Telefon:$phone
					<input type='hidden' name='phone' value='$phone' >
				</p>
				<p>
					<input type='hidden' name='address' value='$address' >
				</p>
				<p>
					Adress: $address
					<input type='hidden' name='zipCode' value='$zipCode' >
				</p>
				<p>
					Stad: $city
					<input type='hidden' name='city' value='$city' >
				</p>
				<p>
					Land: $country
					<input type='hidden' name='country' value='$country' >
				</p>
				 <p class='field-block'>
					Check-in: $arrives
					<input class='text-field' id='arrives' name='arrives' value='$arrives' type='hidden' >
				</p>
				<p class='field-block'>
					Check-out: $departs
					<input class='text-field' id='departs' name='departs' value='$departs' type='hidden' >
				</p>
				
				<p class='field-block'>
					Rum: $select				
					<input type='hidden' name='room' value='$select' >
				</p>
				<p>
					Aktivitet: $activity_string
					<input type='hidden' name='activity' value='$activity_string' >
				</p>
				<fieldset>
				Övrig information:
					 $other
				</fieldset>
				<input type= 'hidden' name='other' value='$other'>
						
				<p class='field-block-btn field-block-full'>
					<input name = 'confirm' id='form-btn' class='form-btn' type='submit' value='Bekräfta' />
				</p>
			</form>
		";		
					
	}
	elseif (isset ($_POST['confirm']) ){
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$address = $_POST['address'];
					$zipCode = $_POST['zipCode'];
					$city = $_POST['city'];
					$country = $_POST['country'];
					$arrives = $_POST['arrives'];
					$departs = $_POST['departs'];
					$select = $_POST['room'];
					$activity = $_POST['activity'];
					
					$other = $_POST['other'];
					// Skickar /sparar i DB.
					$query = "INSERT INTO  bookings
						(date, firstName, lastName, email, phone, address, zipCode, city,	country, arrives, departs, room, activity, information)
						VALUES 
						(NOW(), 
						'$firstName', '$lastName', '$email', '$phone', '$address', '$zipCode', '$city', '$country', '$arrives', '$departs', '$select', '$activity', '$other')
						";
					
					$massege = "fjfjfjfjfjfj";
					//$brev ="tvkocken@gmail.com";
					if (mysqli_query($db, $query)) {
						echo "Tack för din bokning";
						header("refresh:10;index.php"); //After 10 seconds, the page will refresh and forward to index.php
					}
					else {
						echo "hoppsan '$firstName', '$lastName', '$email', '$phone', '$address', '$zipCode', '$city', '$country', '$arrives', '$departs', '$select'";
					}
					//mail ($email, "Confirmation", $massege, "From: Gladageten.com");
						
	
	} 
	else{
		echo "
		<header class='site-header'>
    <a href='index.php'>
        <h1>Den glada geten</h1>
    </a>

    <a href='#nav' title='meny' class='toggle-nav' id='toggle-nav'>
    <span></span>
    <span></span>
    <span></span>
    </a>

    <nav id='nav' class='site-nav'>
        <ul class='site-ul'>
            <li><a href='index.php'>Hem</a></li>
            <li><a href='booking.php'>Boka rum</a></li>
            <li class='has-dropdown'><a class='arrow-down' href='#about'>Om oss</a>
                <ul id='about' class='dropdown hidden'>
                    <li><a href='about.php'>Om oss</a></li>
                    <li><a href='room.php'>Våra rum</a></li>
                    <li><a href='gallery.php'>Galleri</a></li>
                    <li><a href='price.php'>Priser</a></li>
                    <li><a href='activity.php'>Aktiviteter</a></li>
                </ul>
            </li>
            <li><a href='contact.php'>Kontakt</a></li>
        </ul>
    </nav>
</header>
<div class='site-wrapper'>
	<div class='form-container'>
		<form class='booking' method='post' action='' >
			<p class='field-block'>
				<label for='firstName'>Förnamn</label>
				<input class='text-field' id='firstName' name='firstName' value='' placeholder='Förnamn' type='text' >
			</p>
			<p class='field-block'>
				<label for='lastName'>Efternamn</label>
				<input class='text-field' id='lastName' name='lastName' value='' placeholder='Efternamn' type='text' >
			</p>
			<p class='field-block'>
				<label for='email'>E-mail</label>
				<input class='text-field' id='email' name='email' value='' placeholder='E-mail' type='text' >
			</p>
			<p class='field-block'>
				<label for='phone'>Telefon</label>
				<input class='text-field' id='phone' name='phone' value='' placeholder='Telefonnummer' type='number' >
			</p>
			<p class='field-block'>
				<label for='address'>Adress</label>
				<input class='text-field' id='address' name='address' value='' placeholder='Adress' type='text' >
			</p>
			<p class='field-block'>
				<label for='zipCode'>Postnummer</label>
				<input class='text-field' id='zipCode' name='zipCode' value='' placeholder='Postnummer' type='number' >
			</p>
			<p class='field-block'>
				<label for='city'>Stad</label>
				<input class='text-field' id='city' name='city' value='' placeholder='Stad' type='text' >
			</p>
			<p class='field-block'>
				<label for='country'>Land</label>
				<input class='text-field' id='country' name='country' value='' placeholder='Land' type='text' >
			</p>
			<p class='field-block'>
				<label for='arrives'>Check-in</label>
				<input class='text-field' id='arrives' name='arrives' placeholder='dd-mm-åå'>
			</p>
			<p class='field-block'>
				<label for='departs'>Check-out</label>
				<input class='text-field' id='departs' name='departs' placeholder='dd-mm-åå'>
			</p>
			<p class='field-block'>
			<label for='rooms'>Rum</label>
				<span class='select'>
					<select name='select'>
						<option value='value0' selected>Välj typ av rum</option>
						<option value='Enkelrum'>Enkelrum</option>
						<option value='Dubbelrum'>Dubbelrum</option>
						<option value='Familjerum'>Familjerum</option>
					</select>
				</span>
			</p>
			<div class='field-block field-block-full'>
				<fieldset>
					<legend>Välj aktiviteter att boka</legend>
					<input type='checkbox', name='activity[]', value='  Getmatning' ><label>Getmatning  (100 kr/person)</label><br>
					<input type='checkbox', name='activity[]', value='  Getklappning' ><label>Getklappning (50 kr/person)</label><br>
					<input type='checkbox', name='activity[]', value='  Skogspromenad' ><label>Skogspromenad (250 kr/person)</label><br>
					<input type='checkbox', name='activity[]', value='  Skotersafari' ><label>Getklappning (50 kr/person)</label><br>
					<input type='checkbox', name='activity[]', value='  Spa' ><label>Spa (se <a class='price-reference' href='price.php'>prislista</a>)</label>
				</fieldset>
	   
				<p class='field-block field-block-full'>
					<label class='other' for='other'>Övrig information</label>
					<textarea class='text-field' id='other' name='other' rows='8'></textarea>
				</p>
				
			</div>
			<p class='field-block-btn field-block-full'>
				<input name = 'boka' id='form-btn' class='form-btn' type='submit' value='Boka' />
			</p>
		</form>
	</div>
</div>
<footer class='site-footer'>
	<div class='compatible'>
		<img class='dektop' src='icons/iconmonstr-computer-5.svg' alt=''>
		<img class='tablet' src='icons/iconmonstr-tablet-1.svg' alt=''>
		<img class='mobile' src='icons/iconmonstr-smartphone-3.svg' alt=''>
	</div>

	<p>
		&copy; Den glada geten - Bed &amp; Breakfast 2016. All rights reserved.
	</p>
</footer>
			";
		}
	


?>
<script src='script/kalenderscript.js'></script>
<script src='script/main.js'></script>
</body>
</html>
