<?php 

require_once('conn.php');
#FUNCTION TO CHECK IF PASSWORD ID THE SAME AS IN DATABASE
function passwordcheck($pass){
$insert = "SELECT * FROM `contrasena` WHERE `oldpwd`='".$pass"'";
$query = mysqli_query($GLOBALS['conn'], $insert);

while($row = mysqli_fetch_assoc($query)){
    if($pass == $row['oldpwd']){
       header('Location: account-information.php?status=success');
        return 'success'; # éxito
    }

}




?>