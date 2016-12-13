<?php

$db = mysqli_connect("localhost", "root", "", "company");

/*********************************************************************************************/

if(isset($_POST["id"])) {
   $new_text1 = mysqli_real_escape_string($db, $_POST['formtext1']);
   $new_text2 = mysqli_real_escape_string($db, $_POST['formtext2']);
   $new_text3 = mysqli_real_escape_string($db, $_POST['formtext3']);
   $id = mysqli_real_escape_string($db, $_POST['id']);
   $query = "UPDATE pages SET page_content1 = '$new_text1', page_content2 = '$new_text2', page_content3 = '$new_text3' WHERE id = $id";
   mysqli_query($db, $query);   
}


