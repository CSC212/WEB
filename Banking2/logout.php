<?php
$con = mysqli_connect("localhost","root","","users");
error_reporting(0);

session_start();

$emailss = $_SESSION['email'];

if($emailss){
	
	session_destroy();
	
	header("location: default.php");
	}else 
header("location: default.php");
?>