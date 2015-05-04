<?php 
//include"function.php";

/*	FACEBOOK LOGIN + LOGOUT - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/
	require_once( 'lib/Facebook/FacebookSession.php');
	require_once( 'lib/Facebook/FacebookRequest.php' );
	require_once( 'lib/Facebook/FacebookResponse.php' );
	require_once( 'lib/Facebook/FacebookSDKException.php' );
	require_once( 'lib/Facebook/FacebookRequestException.php' );
	require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
	require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
	require_once( 'lib/Facebook/GraphObject.php' );
	require_once( 'lib/Facebook/GraphUser.php' );
	require_once( 'lib/Facebook/GraphSessionInfo.php' );
	require_once( 'lib/Facebook/Entities/AccessToken.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
	require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;

/*PROCESS*/
	
	//1.Stat Session
	 session_start();

	$app_id = '418467551664502';
	$app_secret = '9454c74ebeb933a1d3a82b74b7c1286f';
	$redirect_url='http://localhost/banking2/main.php';

	//3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	$session = new FacebookSession('418467551664502|PlR5q2FvLTmZyhr7iOeTNRobbA8');
         $session = FacebookSession::newAppSession();
        
         
         $helper = new FacebookRedirectLoginHelper($redirect_url);
        $loginUrl = $helper->getLoginUrl();
	
//$helper = new FacebookRedirectLoginHelper();
        $session = $helper->getSessionFromRedirect();
        
        
        
try {
     
  // $session->validate();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
    echo $ex;
} catch(Exception $ex) {
  // When validation fails or other local issues

    echo $ex;
}
   

error_reporting(0);

session_start();
$emailss = $_SESSION['email'];

if($emailss)
{
header("location: ./main.php");
}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Banking</title>
	<link href="css/signup.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    
<div id="wrapper">
	<div id="top">
		<div id="logo">
			<a href="main.php"><img src="img/Network Web.png"></a>
		</div>
		<div id="contact"></div>
		<div id="topnav">
		<ul>
			<li><a href="main.php">HOME</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
                    <form action="" method="post"><span style="float:right;"><input type="text" name="emaill" placeholder="email"/><input placeholder="password" name="passs" type="password"/><input type="submit" name="login" value="login"/></span></form>
	</div>
	</div>
	<div id="signup">
            Register or Register with an  <span  style=" cursor:pointer; color: rgba(0,153,255,.8);"  onclick="dd('http://localhost/api/ss/create1.php');" >web api</span>

		<ul>
			<form action="" method="post">
			
			<li>firstname: <input name="ft" type="text" /></li>
			<li>lastname: <input name="lt" type="text" /></li>
			<li>Email:<input name="em" type="text" /></li>
			<li>Password:<input name="pass" type="text" /></li>
			<li>Re enter password:<input name="pass" type="password" /></li>
			<li>Create :<input name="done" type="submit" /> OR <?php echo '<a href="'.$helper->getLoginUrl(array('email')).'" ><img src=\'Button-login-with-facebook.png\'  height=\'30px\' /></a>';
?></li>
			
			<li></li>
			</form>
		</ul>
	</div>
	<div id="footer">
            
            <?php
            /*
         define ('CONSUMER_KEY','JnWFz37YX6hK9Fg0Jn0FD0HY6') ;
         define ('CONSUMER_SECRET','AtOONOA5K86CDqtzZsITNCI2T9Vjv821dBsipIXKnw6binJT1X');
         
            define('OAUTH_CALLBACK','http://localhost/banking2/main.php');
         
            echo "<a href ='redirect.php'> sign in with twitter</a>";
            
            session_start();
            require('twitteroauth/twitteroauth.php');
          
            
            $connection = new TwitterOauth(CONSUMER_KEY, CONSUMER_SECRECT);
            $request_token = $connection->getRequestToken(OAUTH_CALLBACK);
            
            $_SESSION['oath_token'] = $token =$request_token('oauth_token');
            $_SESSION['oauth_token_secret']=$request_token['oauth_token_secret'];
            
            switch ($connection->http_code){
                case 200;
                    $url = $connection->getAuthorizeURL($token);
                    header ('Location:' . $url);
                    break;
                default:
                    echo "did not work". $connection->http_code;
            }
            
            
            
            if(isset($_REQUEST['oauth_token'])&& $_SESSION'[oauth_token'] != $_REQUEST['oauth_token']))
                {
                header('Location: clearsessions.php');
                
                
            }
            
            $connection = new TwitterOauth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION[oauth_token_secret]);
            
            $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
            $_SESSION['access_token']=$access_token;
            
            unset($_SESSION['oauth_token']);
            unset($_SESSION['oauth_token_secret']);
            
            if($connection->http_code==200){
                
                $_SESSION['status'] = 'verified';
                header('Location: index.php');
                
            }else { 
                header('Location: clearsessions.php');
                
                
                
            }
            
            
            */
            ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
	</div>

</div>
</body>

<script type="text/javascript">
    
function dd (target){
	
	popwin = window.open(target,"windowName","width=550,height=850,status=yes");
	popwin.moveTo(1,1);
	
	//window.open('t.php');
	//alert('hat');
}

</script>

</html>
<?php 

$con = mysqli_connect("localhost","root","","users");

$emaill = $_POST['emaill'];
$passs = $_POST['passs'];

$query = mysqli_query($con,"SELECT * FROM user WHERE email = '$emaill' AND password ='$passs'");
$numrows = mysqli_num_rows($query);
if($_POST['login']){
	
	if($numrows ==1){
		while($row = mysqli_fetch_assoc($query)){
                    
                    $dbemail = $row['email'];
			
                        $_SESSION['email']= $dbemail;
			
                    header("location: ./main.php");
                }
                }else echo "Invalid input";
                }
?>

