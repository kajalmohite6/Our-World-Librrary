<?php

session_start(); 
$emailid=$_POST["email"];
$password=$_POST["password"];

$_SESSION['emailid'] = null;
$_SESSION['password'] = null;

header( "Location: index.php" );

?>



