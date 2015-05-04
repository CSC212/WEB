<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>***WEB SERVICE API***</h1>
<?Php 
include"controller.php";
error_reporting(0);
if($_GET['s']){
$g=$_GET['n'];
$method = $_GET['select'];
$gg= "http://localhost/api/ss/controller.php?name=".$g."&&method=".$method;
}
?><form name="form1" method="get" action=""  enctype="multipart/form-data">
Enter name : <input name="n" type="text" value="<?php echo $g;?>"/>
<select name="select" >

<option  selected><?php  if (isset($_GET['select'])){
	echo $_GET['select'];
	}else echo "GET";?></option>
<option >GET</option>
<option>DELETE</option>
</select>
<input name="s" type="submit" value="Done"/><br/>
<a href="create.php">CREATE ||</a><a href="out.php"> UPDATE</a>
</form>
<iframe src = "<?php echo $gg;?>"   frameborder="0px" width="700px" height="400px" >
<?php echo $name;?>
</iframe>

</body>
</html>