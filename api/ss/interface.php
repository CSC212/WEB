<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form name="form1" method="post" action=""  enctype="multipart/form-data">
url <input name="url" type="text" value="<?php error_reporting(0); echo $_POST['url']?>" />
| Get <input value="get" name="ff" type="radio" />| Post <input value="post" name="ff" type="radio" /> | Put <input value="put" name="ff" type="radio" /> | Delete <input value ="delete" name="ff" type="radio" /> |
<p></p>
<div>
Form:
 Key : <input name="key" type="text" value="<?php echo $_POST['key']?>" /> |  Value : <input name="value" type="text" value="<?php echo $_POST['value'];?>"/>  <input name="done" type="submit" />

</div>
</from>
<div>
<p></p>
Display Result
<br/>
<div>
<?php 
//error_reporting(E_ALL^E_NOTICE);
error_reporting(0);
 if($_POST['done']){

if(!empty($_POST['url'])&&$_POST['ff']){
	$e =$_POST['url']."?".$_POST['key']."=".$_POST['value'];
	}
}


?>
<iframe  src="<?php error_reporting(0); echo $e; ?> "width="500px" height="550px">

</iframe>
</div>
</div>
</body>
</html>