<?php
session_start();
if(!isset($_SESSION['StudentId'])){
	header("location:login.php");
}
else{
	
}

?>

<html>
   <head>
      <title>HOSTEL MANAGEMENT</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="./material2.min.css">
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
  <a class="mdl-navigation__link" href="">Home</a>
               <a class="mdl-navigation__link" href="MyStatus.php">My Status</a>
               <a class="mdl-navigation__link" href="logout.php">Log Out</a>
            </nav>
  </div>
  </header>
  
         <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">MENU</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="">Home</a>
               <a class="mdl-navigation__link" href="MyStatus.php">My Status</a>
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
		 
		   <center><strong class="lb">AVAILABLE HOSTELS<strong><center>

		<table>
		<th></th>
		<tr>
		<td>
		<div>
		<img src="img2.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" style="width:+323px;" href="booking.php?1">JIBOWU MAIN</a>
		</div></br><br/>
		
		</td>
		
		<td>
		<div>
		<img src="img5.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" style="width:+323px;" href="booking.php?2">ADENIYI</a>
		</div></br><br/>
		</td>
		
		<td>
		<div>
		<img src="img3.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" style="width:+323px;" href="booking.php?3">ABIOLA</a>
		</div></br><br/>
		</td>
		</tr>
		<tr>
		<td>
		<img src="img4.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" style="width:+323px;" href="booking.php?4">JADESOLA</a>
		</td>
		<td>
		<div>
		<img src="img6.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" href="booking.php?5">ANNEX</a>
		
		</td>
		
		<td>
		<img src="img1.jpg" height="150" width="295" /><br />
                <a class="col-md-11 btn btn-success" style="width:+323px;" href="booking.php?6">AKINDEKO</a>
		</td>
		</tr>
		<br/>
		<tr>
		<td>
		
		</td>
		<td>
		
		</td>
		<td>
		
		</td>
		</tr>
		</table>
		 <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
               <div class="mdl-logo">
                  Copyright
               </div>
               <ul class="mdl-mini-footer__link-list">
                  <li><a href="#">Project Owner</a></li>
                  <li><a href="#">2017</a></li>
                  <li><a href="#"></a></li>
               </ul>
            </div>
           
         </footer>
         </main>
      
   </body>
</html>