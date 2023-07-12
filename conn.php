<?php 
$servername = 'localhost'; 
$username = 'root';
$pass = '';
$dbname = 'psagestion';

# CONNECTING TO THE DATABASE // CONEXIÓN A LA BASE DE DATOS
$GLOBALS['conn'] = mysqli_connect($servername, $username, $pass, $dbname);
if($GLOBALS['conn']){
    return 'connected to sql';
}
die('connection failed '.mysqli_connect_erro());


#if(!$GLOBALS['conn']){
#    die("Connection failed." . mysqli_connect_erro());
#}
#else{
#    return 'connected to sql';
#}

//mysqli_close($conn);
?>