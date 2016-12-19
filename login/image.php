<?php
include('session.php');
?>
<?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT userPic FROM images WHERE userID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['userPic']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM images WHERE userID =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: image.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
<div id="profile">
<b id="welcome">Välkommen : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Logga ut</a></b>
</div>
<nav>
	<ul>
		<li><a href="textprofile.php">Text admin</a></li>
		<li><a href="image.php" class="current">Bild admin</a></li>
		<li><a href="booking.php">Bokningar</a></li>			
	</ul>
</nav>
<div class="container">

	<div class="page-header">
    	<h1 class="h2">Bildadministration <a class="btn btn-default" href="addnew.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Lägg till bild </a></h1> 
    </div>
    
<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare('SELECT userID, userPic FROM images ORDER BY userID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<img src="user_images/<?php echo $row['userPic']; ?>" class="img-rounded" width="250px" height="250px" />
				<p class="page-header">
				<span>
				<a class="btn btn-danger" href="?delete_id=<?php echo $row['userID']; ?>" title="Radera bild" onclick="return confirm('Säker på att du vill radera? ')"><span class="glyphicon glyphicon-remove-circle"></span> Radera</a>
				</span>
				</p>
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Inga bilder hittades :/
            </div>
        </div>
        <?php
		}	
		?>


</div>	


</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>