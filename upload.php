<?php
$target_dir = "picgallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Filen är en bild - " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else {
        echo "Filen är inte en bild. ";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Tyvärr, filnamnet finns redan i galleriet. ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Beklagar, filstorleken är för stor. ";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Beklagar, endast filer av formatet JPG, JPEG, PNG & GIF är tillåtna.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Filen laddades inte upp.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Filen ". basename( $_FILES["fileToUpload"]["name"]). " har blivit uppladdad till Glada Getens galleri.";
    } else {
        echo "Beklagar, det inträffade ett fel under filuppladdningen.";
    }
}
?>
