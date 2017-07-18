<?php
$msg ="";
if($_SERVER["REQUEST_METHOD"]== "POST"){
 $uname = $_POST["username"];
 $pword = $_POST["password"];
 
 $con = mysqli_connect("localhost","root","");
 if(!$con){
	 die('Connection Failed'.mysqli_error($con));
	 
	 
 }
 mysqli_select_db($con,"hmdata");
 
 $result = mysqli_query($con,"select StudentId from student_table where MatricNumber = '$uname' and Password = '$pword'")or die('Connection Failed'.mysqli_error($con));
 $row = mysqli_fetch_row($result);
 if($row != null){
	 session_start();
	 $_SESSION['StudentId'] = $row[0];
	 
	 header("location:home.php") or die('Connection Failed'.mysqli_error($con));
	 
 }
 else{
	 $msg = "Incorrect Username and Password";
}
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>HOSTEL MANAGEMENT|STUDENT LOGIN</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style_2.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">BOOK HOSTELS <span>EASILY!</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form method="post">
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
		</form>
			<a href="register.php"><p class="small">Create Account</p></a>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>