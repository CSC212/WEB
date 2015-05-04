<?php 

/*function get_price($find){
	$books=array(
	"java"=> "$299",
	"c" =>"$353",
	4 =>"$90",
	"php" =>"$500",
	);

	foreach($books as $book=>$price)
	{ 
	if($book==$find){
	return $price;
	break;
	}
	}
}*/

function get_details($name){
	
	$con = mysqli_connect("localhost","root","","users");
	//$con = mysqli_connect("server19.serversfree.com","u695922109_w","stecks0298","users");
	$q = mysqli_query($con,"select * from user where firstname = '$name' ");
	while($r = mysqli_fetch_array($q)){
		$rr = "<b> Fristname : ".$r['firstname']." | Lastname : ".$r['lastname']." | Email : ".$r['email'];
		//$rrr =array("Name" => $r['firstname']." ".$r['lastname'], "email" =>$r['email']);
		return $rr;
		}
		return "Name not found";
		
		
	}
	
function delete($id){
$con = mysqli_connect("localhost","root","","users");
//$con = mysqli_connect("server19.serversfree.com","u695922109_w","stecks0298","users");


$q = mysqli_query($con,"select * from user where firstname = '$id' ");
	while($r = mysqli_fetch_array($q)){
		$rr = "<b>".$r['firstname']."</b>"."  "."<b>".$r['lastname']."</b>"." with email "."<b>".$r['email']."</b>";
		//$rrr =array("Name" => $r['firstname']." ".$r['lastname'], "email" =>$r['email']);
		echo   $rr;
	}
	$q = mysqli_query($con,"delete from user where firstname ='$id'");
}

function insert($first, $last, $pass, $email){
$con = mysqli_connect("localhost","root","","users");
//$con = mysqli_connect("server19.serversfree.com","u695922109_w","stecks0298","users");
$q ="insert into user (id, firstname, lastname, password, email) values(id,'$first','$last','$pass','$email')";

$qq = mysqli_query($con,"select * from user where email = '$email' ");

$num = mysqli_num_rows($qq);
if($num !=1){
    
   $q = mysqli_query($con, $q);

   $qqa = mysqli_query($con,"select * from user where email ='$email'  ");
   
   while($r = mysqli_fetch_array($qqa)){
	echo "You are all set now, "."<b>".$r['firstname']." ". $r['lastname']."</b> close windows now and login";
                
	}
   
}else {echo "Already Exit";}



}

function update($first, $last, $pass, $email){
    $con = mysqli_connect("localhost","root","","users");
  //  $con = mysqli_connect("server19.serversfree.com","u695922109_w","stecks0298","users");
    
    $qq = mysqli_query($con,"select * from user where email = '$email' ");

$num = mysqli_num_rows($qq);
if($num ==1){
  $sql = "UPDATE user SET firstname='$first' WHERE email='$email'";

if (mysqli_query($con, $sql)) {
     $sql = "UPDATE user SET lastname='$last' WHERE email='$email'";

if (mysqli_query($con, $sql)) {
     $sql = "UPDATE user SET password='$pass' WHERE email='$email'";

if (mysqli_query($con, $sql)) {
     $sql = "UPDATE user SET email='$email' WHERE email='$email'";
echo "data was updated! ";
  
   $qqa = mysqli_query($con,"select * from user  ");
   $rrr = "<table border='3'><tr><td width='100px'><b>firstname</b></td><td width='100px'><b>Lastname</b></td><td width='100px'><b>Password</b></td><td width='100px'><b>Email</b></td></tr></table>";
	echo $rrr."</br>";
   while($r = mysqli_fetch_array($qqa)){
	$rr = "<table border='1'><tr><td width='101px'>".$r['firstname']." "."</td><td width='101px'>".$r['lastname']."</td><td width='101px'>".$r['password']."</td><td width='101px'>".$r['email']."</td></tr></table>";		
       //$rr = "<b> ".$r['firstname']."</b>"."  "."<b> ".$r['lastname']."</b> "." "."<b> ".$r['email']."</b><hr/>";
		//$rrr =array("Name" => $r['firstname']." ".$r['lastname'], "email" =>$r['email']);
		echo   $rr;
	}
}
}  
}} else {echo "please input your current email";} 
   
          
      



    
  
   
   
}
          
   
          
   
    


//echo insert();	
//echo json_encode(geta());
//	echo "model"
?>