<?php 
error_reporting(0);
$a = $_GET['a'];
$b =$_GET['b'];

if($_GET['d']){
$aa = $a + $b;

}
?>
<html>
<head>calculator</head>

<body>
<form method="get" >
<input name ="a" type = "text" />
<input name ="b" type = "text" />
<input name ="d" type = "submit"/>
<?php echo "<br/>".$aa; ?>
</from>
<iframe src ="http://www.webservice.bugs3.com/api/ss/int.php" height="500px" weidth="400px" >

</iframe>
</body>
</html>