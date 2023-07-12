<?php
session_start();
$username = $_POST['username'];
header("Location: control-panel.php");
exit();


?>