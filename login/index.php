<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<h1 align="center">Login</h1>
		<form action="" method="post" style="text-align:center;">
			<input type="text" placeholder="Användarnamn" id="user" name="username"><br/><br/>
			<input type="password" placeholder="Lösenord" id="pass" name="password"><br/><br/>
			<input type="submit" value="Login" name="submit">
			<!-- Error Message -->
			<span><?php echo $error; ?></span>
		</form>
	</div>
</body>
</html>
