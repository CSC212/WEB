<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>***WEB SERVICE API***</h1>
<?Php error_reporting(0);
//include"controller.php";


if($_GET['c']){

$f=$_GET['f'];
$l = $_GET['l'];
$p= $_GET['p'];
$e = $_GET['e'];

$gg= "http://localhost/api/ss/controller.php?method=PUT"."&&f=".$f."&&l=".$l."&&p=".$p."&&e=".$e;
}
?><form name="form1" method="get" action=""  enctype="multipart/form-data">
Enter Firstname : <input name="f" type="text" value="<?php echo $_GET['f'];?>"/><br/>
Enter Lastname : <input name="l" type="text" value="<?php echo $_GET['l'];?>"/><br/>
Enter Password : <input name="p" type="text" value="<?php echo $_GET['p'];?>"/><br/>
Enter Email : <input name="e" type="text" value="<?php echo $_GET['e'];?>"/><br/>


<input name="c" type="submit" value="Update"/><br/>
<a href="int.php">GET ||</a><a href="out.php"> UPDATE</a>
</form>
<iframe src = "<?php echo $gg;?>"   frameborder="0px" width="700px" height="400px" >

</iframe>

</body>
</html>