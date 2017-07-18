<?php
session_start();
$StudentId = $_SESSION['StudentId'];

if($StudentId == null){
	header("location:login.php");
}

$con = mysqli_connect("localhost","root","");
if($con){
	
	mysqli_select_db($con,"hmdata");
	$answer = mysqli_query($con,"SELECT RoomNumber,Status,hostelId FROM bookings WHERE bookersId =  $StudentId") or die("Connection error " .mysqli_error($con));
	$line = mysqli_fetch_row($answer);
	$hostelId = $line[2];
	
	
	if($line[1] ==1){
		$ans2 = mysqli_query($con,"SELECT HostelName from Hostels WHERE hostelnameid = $hostelId ");
	$line2 = mysqli_fetch_row($ans2);
		$html = " <div class='jumbotron alert alert-success'>
   <center><div class='page-header'> <h1><strong>SUCCESS!!!</strong></h1></div>
    <p>Congratulation Your Application As been Approved!</p>
 
  <p>Your Hostel Name: <b>".$line2[0]."</b></p>
  <br/>
  <br/>
  <p>Your Room Number:<b>".$line[0] ."</b></p>
  <br/>
  <br/>
 
  
  
  
  
  
  
  <p>Note:Kindly pay all necessary dues on your arrival.</p></center>
	</div>";
	}else if($line[1] == 3){
		$ans2 = mysqli_query($con,"SELECT HostelName from Hostels WHERE hostelnameid = $hostelId ");
	$line2 = mysqli_fetch_row($ans2);
		$html = " <div class='jumbotron alert alert-danger'>
   <center><div class='page-header'> <h1><strong>SORRY!!!</strong></h1></div>
    <p>Your Application has not been Approved Yet!</p>
	<p>Check Back Later</p>
 
  <p>Your Proposed Hostel: <b>".$line2[0]."</b></p>
  <br/>
  <br/>
  <br/>
  <br/>
  </div>";
	}
	else if($line[1] == 0){
	   
	   		$html = " <div class='jumbotron alert alert-danger'>
   <center> <h1><strong>SORRY!!!</strong></h1>
    <p>Your Application Cannot Not be Approved! Kindly Re-apply to another Hostel</p>
 
  <Strong>Reasons Maybe one of the following</strong>
  <ul><br/>
 <li> Hostel Maybe Filled</li>
  <br/>
 <li>You Applied into the wrong Hostel</li>
  <br/>
  <li>You are not qualified for an hostel</li>
  <br/>
   <li>You have not booked at all!!</li>
  </ul>
  </center>
	</div>";
	   
	   
   }
	}


?>
<html>
   <head>
      <title>HOSTEL MANAGEMENT|MY STATUS</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./material.min.css">
	   <link rel="stylesheet" href="css/style2.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
<script src="./material.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:limegreen;">
  <div class="mdl-layout__header-row">
  <span class="mdl-layout-title">HOSTEL MANAGEMENT SYSTEM</span>
  <div class="mdl-layout-spacer"></div>
  <nav class="mdl-navigation">
   <a class="mdl-navigation__link" href="home.php">Home</a>
               <a class="mdl-navigation__link" href="#">My Status</a>
               <a class="mdl-navigation__link" href="logout.php">Log Out</a>
  </nav>
  </div>
  </header>
  
         <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">MENU</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="home.php">Home</a>
               <a class="mdl-navigation__link" href="#">My Status</a>
               <a class="mdl-navigation__link" href="logout.php">Log Out</a>
            </nav>
         </div>
		 </div>
         <main class="mdl-layout__content">
          <div class="bgimg">
       <img class="pot" src="img9.jpeg">
      <img class="logo" src="full-logo2.png" style="float:left;">
      <span class="name center-block" style="float:center;margin-left: 450;">HOSTEL SEARCH AND BOOKINGS</span>
       </div>
		<div class="container">
 <?php
 echo $html;
 ?>
</div>
		 <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
               <div class="mdl-logo">
                  Copyright
               </div>
               <ul class="mdl-mini-footer__link-list">
                  <li><a href="#"></a></li>
                  <li><a href="#">Project Owner</a></li>
                  <li><a href="#">2017</a></li>
               </ul>
            </div>
           
         </footer>
         </main>
      
   </body>
</html>