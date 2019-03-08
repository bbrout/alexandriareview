<?php
$target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["classnotes"]["name"]);
$target_file = $target_dir . "newfile.pdf" ;
$uploadOk = 1;

 if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

     if ($_FILES['classnotes']['type'] != "application/pdf") {
        echo "<p>Class notes must be uploaded in PDF format.</p>";
     } else {
        $result = (move_uploaded_file($_FILES['classnotes']['tmp_name'], $target_file));
        if ($result == 1){
           echo "<p>Upload done .</p>";
        }else {
           echo "<p>Sorry, Error happened while uploading . </p>";
        }
     }
     echo nl2br ("\n \n             Press BACK button to return to previous page.") ;
 }
?>
