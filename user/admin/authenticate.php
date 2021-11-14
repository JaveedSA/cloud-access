<?php
// We need to use sessions, so you should always start sessions using the below code.

session_start();
$_SESSION["name"];
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['logged_in'])){
	header('Location:../login/login.php');
	exit;
}

?>