<?php

session_start();
ob_start();
require_once('functions.php');
require_once('../config.php');
unset($_SESSION['access_token']);
$gclient->revokeToken();

session_destroy();
redirect('../login.php');


 ?>
