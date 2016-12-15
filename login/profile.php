<?php
include('session.php');
include('textadmin.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="profile">
	<b id="welcome">Välkommen : <i><?php echo $login_session; ?></i></b>
	<b id="logout"><a href="logout.php">Logga ut</a></b>
	</div>
	<nav>
		<ul>
			<li><a href="profile.php" class="current">Text admin</a></li>
			<li><a href="image.php">Bild admin</a></li>
			<li><a href="booking.php">Bokningar</a></li>
		</ul>
	</nav>

<?php

$query = "SELECT * FROM pages";
$pages_result = mysqli_query($db, $query);

while($page = mysqli_fetch_assoc($pages_result)){
	echo '
		<div class="text-edit">
			<h1 class="text-heading">'.$page['page_name'].'</h1>
			<form class="edit" method="POST">
				<textarea name="formtext1" rows="20" cols="80">'.$page['page_content1'].'</textarea>
				<textarea name="formtext2" rows="20" cols="80">'.$page['page_content2'].'</textarea>
				<textarea name="formtext3" rows="20" cols="80">'.$page['page_content3'].'</textarea>
				<input type="hidden" name="id" value="'.$page['id'].'">
			    <button type="submit" name="update">Spara</button>
			</form>
		</div>
	';
}

?>

<script type="text/javascript">
	var ta = document.getElementsByTagName("textarea");
	for (var i = 0; i < ta.length; i++) {
		if (ta[i].value == "") {
			ta[i].style.display = "none";
		};
	}
</script>
</body>
</html>
