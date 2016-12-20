<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<meta charset='utf-8' />
	<link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400i|Open+Sans:400,700" rel="stylesheet">
</head>
<body>

	<?php
	// Uppkoppling till DB
	$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
	//$db = mysqli_connect('localhost', 'root', '', '219291-gg');//--------------- skicka data till DB ---------------------------------------

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
		$other = $_POST['other'];
		$room_nr = $_POST['room_nr'];
		//$type = $_POST['type'];

		if (empty ($_POST['activity'])) {
			$activity_string = "";
		} else {
			$activity_string = implode (", ", $_POST['activity']);
		}

		$query = "select type from rooms where room_nr='$room_nr'";
		$result = mysqli_query($db, $query);
		while($row = mysqli_fetch_assoc($result)) {
			$rt = $row['type'];
		}
		?>
		<form class='booking' method='post' action=''>
			<p>
				Rumstyp: <?= $rt ?>
				<input type ='hidden' name='room_nr' value='<?= $room_nr ?>'>
			</p>
			<p>
				Namn: <?= $firstName ?>
				<input type='hidden' name='firstName' value='<?= $firstName ?>'>
			</p>
			<p>
				Efternamn: <?= $lastName ?>
				<input type='hidden' name='lastName' value='<?= $lastName ?>'>
			</p>
			<p>
				Epost: <?= $email ?>
				<input type='hidden' name='email' value='<?= $email ?>'>
			</p>
			<p>
				Telefon:<?= $phone ?>
				<input type='hidden' name='phone' value='<?= $phone ?>'>
			</p>
			<p>
				<input type='hidden' name='address' value='<?= $address ?>'>
			</p>
			<p>
				Adress: <?= $address ?>
				<input type='hidden' name='zipCode' value='<?= $zipCode ?>'>
			</p>
			<p>
				Stad: <?= $city ?>
				<input type='hidden' name='city' value='<?= $city ?>'>
			</p>
			<p>
				Land: <?= $country ?>
				<input type='hidden' name='country' value='<?= $country ?>'>
			</p>
			<p class='field-block'>
				Check-in: <?= $arrives ?>
				<input class='text-field' id='arrives' name='arrives' value='<?= $arrives ?>' type='hidden'>
			</p>
			<p class='field-block'>
				Check-out: <?= $departs ?>
				<input class='text-field' id='departs' name='departs' value='<?= $departs ?>' type='hidden'>
			</p>
			<p>
				Aktivitet: <?= $activity_string ?>
				<input type='hidden' name='activity' value='<?= $activity_string ?>'>
			</p>
			<fieldset>
				Övrig information:
				<?= $other ?>
			</fieldset>
			<input type= 'hidden' name='other' value='<?= $other ?>'>

			<p class='field-block-btn field-block-full'>
				<input name = 'confirm' id='form-btn' class='form-btn' type='submit' value='Bekräfta' />
			</p>
		</form>
		<?php
	}
	else if (isset ($_POST['confirm']) ){
		$firstName = mysqli_real_escape_string($db, $_POST['firstName'] );
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$zipCode = $_POST['zipCode'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$arrives = $_POST['arrives'];
		$departs = $_POST['departs'];
		$room_nr = $_POST['room_nr'];
		$activity = $_POST['activity'];
		$other = $_POST['other'];

		// Skickar /sparar i DB.
		$query = "INSERT INTO  bookings
		(date, firstName, lastName, email, phone, address, zipCode, city,	country, arrives, departs, room, activity, information)
		VALUES
		(NOW(),
		'$firstName', '$lastName', '$email', '$phone', '$address', '$zipCode', '$city', '$country', '$arrives', '$departs', '$room_nr', '$activity', '$other')
		";

		$massege = "fjfjfjfjfjfj";
		//$brev ="tvkocken@gmail.com";
		if (mysqli_query($db, $query)) {

			include ('header.php');
		?>
		<div class="site-wrapper">
			<div class="index-section">
				<h1>Tack för din bokning</h1>
			</div>
		</div>
		<?php
			include ('footer.php');
		}
		else {
			echo "hoppsan '$firstName', '$lastName', '$email', '$phone', '$address', '$zipCode', '$city', '$country', '$arrives', '$departs', '$select'";
		}
		//mail ($email, "Confirmation", $massege, "From: Gladageten.com");


	}
	else if (isset ($_POST['checkDate']) ){


		$arrives = $_POST['arrives'];
		$departs = $_POST['departs'];

		$query = "SELECT * FROM rooms AS r
		WHERE r.id NOT IN (
			SELECT room FROM bookings AS b
			WHERE
			(arrives BETWEEN '$arrives' AND '$departs')
			OR (departs BETWEEN '$arrives' AND '$departs')
			OR (arrives = '$arrives')
			OR (departs = '$departs')
			OR ('$arrives'>= arrives AND '$departs' < departs)

		)";
		$result = mysqli_query($db, $query);

		include ('header.php');
		?>
		<div class='site-wrapper'>
			<div class='form-container'>
				<form class='booking' method='post' action=''>
					<p class='field-block'>
						<label for='arrives'>Check-in</label>
						<input class='text-field' id='arrives' value='<?= $arrives ?>' name='arrives' disabled>
						<input class='text-field' id='arrives' value='<?= $arrives ?>' name='arrives' type='hidden'>
					</p>
					<p class='field-block'>
						<label for='departs'>Check-out</label>
						<input class='text-field' id='departs' value='<?= $departs ?>' name='departs' disabled>
						<input class='text-field' id='departs' value='<?= $departs ?>' name='departs' type='hidden'>
					</p>

					<?php include ('checkdate.php'); ?>
					<p class='field-block'>
						<label for='firstName'>Förnamn</label>
						<input class='text-field' id='firstName' name='firstName' value='' placeholder='Förnamn' type='text' required>
					</p>
					<p class='field-block'>
						<label for='lastName'>Efternamn</label>
						<input class='text-field' id='lastName' name='lastName' value='' placeholder='Efternamn' type='text' required>
					</p>
					<p class='field-block'>
						<label for='email'>E-mail</label>
						<input class='text-field' id='email' name='email' value='' placeholder='E-mail' type='text'>
					</p>
					<p class='field-block'>
						<label for='phone'>Telefon</label>
						<input class='text-field' id='phone' name='phone' value='' placeholder='Telefonnummer' type='number' required>
					</p>
					<p class='field-block'>
						<label for='address'>Adress</label>
						<input class='text-field' id='address' name='address' value='' placeholder='Adress' type='text' required>
					</p>
					<p class='field-block'>
						<label for='zipCode'>Postnummer</label>
						<input class='text-field' id='zipCode' name='zipCode' value='' placeholder='Postnummer' type='number' required>
					</p>
					<p class='field-block'>
						<label for='city'>Stad</label>
						<input class='text-field' id='city' name='city' value='' placeholder='Stad' type='text' required>
					</p>
					<p class='field-block'>
						<label for='country'>Land</label>
						<input class='text-field' id='country' name='country' value='' placeholder='Land' type='text' required>
					</p>

					<div class='field-block field-block-full'>
						<fieldset>
							<legend>Välj aktiviteter att boka</legend>
							<ul>
								<li><label><input type='checkbox' name='activity[]' value='  Getmatning'> Getmatning  (100 kr/person)</label></li>
								<li><label><input type='checkbox' name='activity[]' value='  Getklappning'> Getklappning (50 kr/person)</label></li>
								<li><label><input type='checkbox' name='activity[]' value='  Skogspromenad'> Skogspromenad (250 kr/person)</label></li>
								<li><label><input type='checkbox' name='activity[]' value='  Skotersafari'> Skotersafari (500 kr/person)</label></li>
								<li><label><input type='checkbox' name='activity[]' value='  Spa'>Spa (se <a class='price-reference' href='price.php'>prislista</a>)</label></li>
							</ul>
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
				<?php
				include ('footer.php');
			}
			else{
				include ('header.php');
				?>
				<div class='site-wrapper'>
					<div class='form-container'>
						<div class='check-date-form'>
							<form  method='post'>
								<p class='field-block'>
									<label for='arrives'>Check-in</label>
									<input class='text-field' id='arrives' name='arrives' placeholder='  åå-mm-dd '>
								</p>
								<p class='field-block'>
									<label for='departs'>Check-out</label>
									<input class='text-field' id='departs' name='departs' placeholder='  åå-mm-dd '>
								</p>
								<p class='field-block-btn field-block-full'>
									<input name = 'checkDate' id='form-btn' class='form-btn' type='submit' value='Fortsätt	' />
								</p>
							</form>
						</div>
					</div>
				</div>
				<?php
				include ('footer.php');
			}
			?>

			<script src="script/jquery-3.1.0.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src='script/kalenderscript.js'></script>
			<script src="script/main.js"></script>

		</body>
		</html>
