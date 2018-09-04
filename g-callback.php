<?php
session_start();
require_once('includes/functions.php');
require_once('config.php');

if(isset($_SESSION['access_token'])){
  $gclient->setAccessToken($_SESSION['access_token']);
}
else if(isset($_GET['code'])){
  $token=$gclient->fetchAccessTokenWithAuthCode($_GET['code']);
  $_SESSION['access_token']=$token;
}else{
  header('Location:login.php');
  exit();
}

$oAuth=new Google_Service_Oauth2($gclient);
$userdata=$oAuth->userinfo_v2_me->get();
var_dump($userdata);
$_SESSION['email']=$userdata['email'];
echo "<br>";
echo $userdata['gender'];
//header('Location:dashboard.php?current');
exit();



 ?>
