<?php
session_start();
$user_check =$_SESSION["username"];
if(!isset($_SESSION["username"])){
	echo $_SESSION["username"];
	header("location:login.php");
	
}else{
	header("location:home.php");
}