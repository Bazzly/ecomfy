<?php
session_start();
$sess = $_SESSION['userdata']['name'];
if(!isset($sess)){
	header("location: login.php");
} 
?>