<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
//require 'functions.php'; // Include functions
//require 'dbconfig.php';

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');    // DB username
//define('DB_PASSWORD', '');    // DB password
//define('DB_DATABASE', 'greentrends');      // DB name

define('DB_SERVER', 'greentrendsgt.db.9731563.hostedresource.com');
define('DB_USERNAME', 'greentrendsgt');    // DB username
define('DB_PASSWORD', 'Dim@1234');    // DB password
define('DB_DATABASE', 'greentrendsgt');      // DB name

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");

function checkuser($fbid,$fbname,$fbemail){
 $sql = mysql_query("select * from Users where Fuid='$fbid'");
	$productCount = mysql_num_rows($sql);
	if (empty($productCount)) { // if new user . Insert a new record
	//$productCount = mysql_num_rows($sql) or die($sql."<br/><br/>".mysql_error());
 //if($productCount!= 0){
	$query = "INSERT INTO Users (Fuid,Ffname,Fbemail) VALUES ('$fbid','$fbname','$fbemail')";
	mysql_query($query);



	} else {   // If Returned user . update the user record
	$query = "UPDATE Users SET Ffname='$fbname', Fbemail='$fbemail' where Fuid='$fbid'";
	mysql_query($query);
	}
}

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1714288312175344','7651aea019831cad175b7cf82df9cc60' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://digitallyinspiredmedia.com/greentrends-voters2016/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me?locale=en_US&fields=id,name,email,first_name,last_name' );
//  "$request = new FacebookRequest( $session, 'GET', '/me?locale=en_US&fields=first_name,last_name,email' );"
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbname = $graphObject->getProperty('name'); // To Get Facebook full name
 	    $fbfname = $graphObject->getProperty('first_name'); // To Get Facebook full name
 	    $fblname = $graphObject->getProperty('last_name'); // To Get Facebook full name
	    $fbemail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;
     $_SESSION['FULLNAME'] = $fbname;
     $_SESSION['USERNAME'] = $fbfname;
	    $_SESSION['EMAIL'] =  $fbemail;
    /* ---- header location after session ----*/
      checkuser($fbid,$fbname,$fbemail);
   header("Location: index.php");
  } else {
  $loginUrl = $helper->getLoginUrl(array('scope' => 'email'));
 header("Location: ".$loginUrl);
}
?>
