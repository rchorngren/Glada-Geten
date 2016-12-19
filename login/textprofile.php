<?php
include('session.php');
include('textadmin.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
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
			<form class="edit" method="POST">
				<h2 class="text-heading2">Rubrik</h2>
			    <textarea class="text-textarea" name="formtext1">'.$page['main_heading'].'</textarea>
				<h2 class="text-heading2">Text</h2>
				<textarea class="text-textarea" name="formtext2">'.$page['page_content1'].'</textarea>
				<textarea class="text-textarea" name="formtext3">'.$page['page_content2'].'</textarea>
				<textarea class="text-textarea" name="formtext4">'.$page['page_content3'].'</textarea>
				<textarea class="text-textarea" name="formtext5">'.$page['page_content4'].'</textarea>
				<textarea class="text-textarea" name="formtext6">'.$page['page_content5'].'</textarea>
				<textarea class="text-textarea" name="formtext7">'.$page['page_content6'].'</textarea>
				<textarea class="text-textarea" name="formtext8">'.$page['page_content7'].'</textarea>
				<textarea class="text-textarea" name="formtext9">'.$page['page_content8'].'</textarea>
				<textarea class="text-textarea" name="formtext10">'.$page['page_content9'].'</textarea>
				<textarea class="text-textarea" name="formtext11">'.$page['page_content10'].'</textarea>
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