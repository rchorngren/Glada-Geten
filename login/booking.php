<?php
include('session.php');

$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
//$db = mysqli_connect("localhost", "root", "", "company");
mysqli_query($db, "SET NAMES utf8");
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
        <li><a href="textprofile.php">Textadmin</a></li>
        <li><a href="image.php">Bildadmin</a></li>
        <li><a href="booking.php" class="current">Bokningar</a></li>            
    </ul>
</nav>
<div class="booking-edit">
<?php 

$query = "SELECT * FROM bookings ORDER BY arrives ASC"; 
$booking_result = mysqli_query($db, $query);


if ($booking_result->num_rows > 0) {
     // output data of each row
    while ($row = $booking_result->fetch_assoc()) {
        echo 
        "<div class='inside'>"
        . $row["id"].
        ". </br><p class='booking-text'> Datum:</p>". $row["date"]. 
        " </br><p class='booking-text'>Namn:</p> ".$row["firstName"]. 
        " </br><p class='booking-text'>Efternamn:</p>  ".$row["lastName"]. 
        " </br><p class='booking-text'>Email:</p>  ".$row["email"]. 
        " </br><p class='booking-text'>Tel:</p>  ".$row["phone"]. 
        " </br><p class='booking-text'>Adress:</p>  ".$row["address"]. 
        " </br><p class='booking-text'>Postnr:</p>  ".$row["zipCode"]. 
        " </br><p class='booking-text'>Stad:</p>  ".$row["city"]. 
        " </br><p class='booking-text'>Land:</p>  ".$row["country"]. 
        " </br><p class='booking-text'>Ankomst:</p>  ".$row["arrives"]. 
        " </br><p class='booking-text'>Utcheck:</p>  ".$row["departs"]. 
        " </br><p class='booking-text'>Rum:</p>  ".$row["room"]. 
        " </br><p class='booking-text'>Aktivitet:</p>  ".$row["activity"]. 
        " </br><p class='booking-text'>Info:</p>  ".$row["information"]. 
        "</div>";
    }
} else {
     echo "0 results";
}

?>
        
</div>


</body>
</html>