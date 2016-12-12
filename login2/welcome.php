<?php 

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "gladageten");

echo "Login lyckades! Välkommen ";
//för att användarens namn ska komma upp
$query = mysqli_query($conn, "SELECT user FROM userpass");
$result = mysqli_fetch_assoc($query);
echo $result["user"], " :)";



?>