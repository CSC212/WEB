<?php 
error_reporting(0);

function insert(){
$con = mysqli_connect("localhost","root","","back2");



if($_POST['done']){
$ft=$_POST['ft'];
$lt=$_POST['lt'];
$em=$_POST['em'];
$pass=$_POST['pass'];
$date= date("Y/m/d");

$query = "insert into back (id,firstname,lastname,email,password,date) values(id,'$ft','$lt','$em','$pass','$date')";

mysqli_query($con,$query);

}

}

?>