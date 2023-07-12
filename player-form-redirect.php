<?php
session_start();

$_SESSION['fname'] = $_GET['fname'];
$_SESSION['fsname'] = $_GET['fsname'];
$_SESSION['ssname'] = $_GET['ssname'];
$_SESSION['username'] = $_GET['username'];
$_SESSION['pwd'] = $_GET['pwd'];
$_SESSION['email'] = $_GET['email'];
$_SESSION['birthdate'] = $_GET['birthdate'];
$_SESSION['apodo'] = $_GET['apodo'];
$_SESSION['sex'] = $_GET['sex'];

header('location: player-form2.php');
exit();
?>