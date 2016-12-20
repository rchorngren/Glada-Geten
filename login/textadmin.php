<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "company");
mysqli_query($db, "SET NAMES utf8");

/*********************************************************************************************/

// update the text in the database and the adminpage and save it.  
if(isset($_POST["id"])) {
	$new_heading = mysqli_real_escape_string($db, $_POST['headingtext1']);
	$new_text1 = mysqli_real_escape_string($db, $_POST['formtext1']);
	$new_text2 = mysqli_real_escape_string($db, $_POST['formtext2']);
	$new_text3 = mysqli_real_escape_string($db, $_POST['formtext3']);
	$new_text4 = mysqli_real_escape_string($db, $_POST['formtext4']);
	$new_text5 = mysqli_real_escape_string($db, $_POST['formtext5']);
	$new_text6 = mysqli_real_escape_string($db, $_POST['formtext6']);
	$new_text7 = mysqli_real_escape_string($db, $_POST['formtext7']);
	$new_text8 = mysqli_real_escape_string($db, $_POST['formtext8']);
	$new_text9 = mysqli_real_escape_string($db, $_POST['formtext9']);
	$new_text10 = mysqli_real_escape_string($db, $_POST['formtext10']);
	$new_text11 = mysqli_real_escape_string($db, $_POST['formtext11']);
	$new_text12 = mysqli_real_escape_string($db, $_POST['formtext12']);
	$new_text13 = mysqli_real_escape_string($db, $_POST['formtext13']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$query = "UPDATE pages SET main_heading = '$new_heading', page_content1 = '$new_text1', page_content2 = '$new_text2', page_content3 = '$new_text3', page_content4 = '$new_text4', page_content5 = '$new_text5', page_content6 = '$new_text6', page_content7 = '$new_text7', page_content8 = '$new_text8', page_content9 = '$new_text9', page_content10 = '$new_text10', page_content11 = '$new_text11', page_content12 = '$new_text12', page_content13 = '$new_text13' WHERE id = $id";
	mysqli_query($db, $query);   
}


