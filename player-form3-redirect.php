<?php
session_start();

$_SESSION['weight'] = $_GET['weight'];
$_SESSION['height'] = $_GET['height'];
$_SESSION['camiseta'] = $_GET['camiseta'];
$_SESSION['pantalone'] = $_GET['pantalone'];
$_SESSION['pie'] = $_GET['pie'];


header('location: player-form-finish.php');
exit();
?>