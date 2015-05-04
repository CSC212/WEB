<?php 
        
error_reporting(0);
session_start();
$emailss = $_SESSION['email'];
$con = mysqli_connect("localhost","root","","users");
$qqa = mysqli_query($con,"select * from user  where email='$emailss' ");
  	
   while($r = mysqli_fetch_array($qqa)){
       
       $f = $r[firstname];
         $l = $r[lastname];
   }

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
        
	
	

	
	
	//2.Use app id,secret and redirect url 
	$app_id = '418467551664502';
	$app_secret = '9454c74ebeb933a1d3a82b74b7c1286f';
	$redirect_url='http://localhost/banking2/main.php';

	//3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	  $helper = new FacebookRedirectLoginHelper($redirect_url);
        $loginUrl = $helper->getLoginUrl();
	
//$helper = new FacebookRedirectLoginHelper();
   // To validate the session:

try {
   // $session = $helper->getSession();
      
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
    echo $ex;
} catch(\Exception $ex) {
  // When validation fails or other local issues

    echo $ex;
}
   
        

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Banking</title>
	<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=418467551664502";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
    
    
	<div id="top">
		<div id="logo">
			<a href="main.php"><img src="img/Network Web.png"></a><div class="fb-like" data-href="http://qcc.esy.es/Banking2/main.php" data-layout="standard" data-action="recommend" data-show-faces="true" data-share="true"></div>
		</div>
		<div id="signin">
			<ul>
                            <li>Welcome <?php  echo "<span style='color:orange; font-size:25px;'>".$f." ". $l."</span>";?></li>
                                <li><a href="logout.php" >logout</a></li>
				
			</ul>
		</div>
		</div>
	<div id="topnav">
		<ul>
			<li><a href="main.php">HOME</a></li>
			<li><a href="contact.html">CONTACT</a></li>
                        <li><a href="t.php">DONATE</a></li>
                      
		</ul>
	</div>
	<div id="banner">
	</div>
	<div id="input">
            <h1>Facebook timeline</h1>
            <div class="fb-post" data-href="https://www.facebook.com/abquintanilla3/photos/a.396223174517.173653.324304944517/10152871745014518/?type=1&amp;theater" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/abquintanilla3/photos/a.396223174517.173653.324304944517/10152871745014518/?type=1"><p>True.</p>Posted by <a href="https://www.facebook.com/abquintanilla3">A.B. Quintanilla</a> on <a href="https://www.facebook.com/abquintanilla3/photos/a.396223174517.173653.324304944517/10152871745014518/?type=1">Friday, November 28, 2014</a></blockquote></div></div>
	
            
		<h1>Twitter timeline </h1>
		<a class="twitter-timeline" href="https://twitter.com/steckssss" data-widget-id="587602474216857600">Tweets by @steckssss</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
		
                    
                    <?php
                  

                    
                    
if($session) {
echo "did worked";
  try {

    $user_profile = (new FacebookRequest(
      $session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());

    echo "Name: " . $user_profile->getName();

  } catch(FacebookRequestException $e) {

    echo "Exception occured, code: " . $e->getCode();
    echo " with message: " . $e->getMessage();

  }   

}
                    ?>
                    <form method="post">
			
	
	</div>
	<div id="info">
            <h1> Amazon search api</h1>
	<script charset="utf-8" type="text/javascript">
amzn_assoc_ad_type = "responsive_search_widget";
amzn_assoc_tracking_id = "widgetsamazon-20";
amzn_assoc_link_id = "RS6EK5ASRATHTBYW";
amzn_assoc_marketplace = "amazon";
amzn_assoc_region = "US";
amzn_assoc_placement = "";
amzn_assoc_search_type = "search_widget";
amzn_assoc_width = "auto";
amzn_assoc_height = "auto";
amzn_assoc_default_search_category = "";
amzn_assoc_default_search_key = "";
amzn_assoc_theme = "light";
amzn_assoc_bg_color = "ffffff";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=US"></script>
		
<p></p>

<script>
  (function() {
    var cx = '010346564636526635016:taepteu1qao';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

	
	</div>
	<div id="footer">
	</div>

</div>
</body>

</html>