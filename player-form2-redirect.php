<?php
session_start();

$_SESSION['tel'] = $_GET['tel'];
$_SESSION['address'] = $_GET['address'];
$_SESSION['rrss'] = $_GET['rrss'];
$_SESSION['federando'] = $_GET['federando'];
$_SESSION['club'] = $_GET['club'];
$_SESSION['categoria'] = $_GET['categoria'];
$_SESSION['class'] = $_GET['class'];
$_SESSION['start-date'] = $_GET['start-date'];
$_SESSION['end-date'] = $_GET['end-date'];

header('location: player-form3.php');
exit();
?>