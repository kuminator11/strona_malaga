
<?php
error_reporting(0);
session_start();
$msg = "";
 
// If upload button is clicked ...
if (isset($_GET['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "files/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "psagestion");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO jugador (foto) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>