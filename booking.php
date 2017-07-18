<?php
session_start();

$hostelId = $_SERVER['QUERY_STRING'];
$bookId =$_SESSION['StudentId'];
if($bookId == null || $hostelId == null){
	header("location:login.php");
}
else{
	
 $con = mysqli_connect("localhost","root","");
 if(!$con){
	 die('Connection Failed'.mysqli_error());
	 
	 
 }
 mysqli_select_db($con,"hmdata");
 
 $result = mysqli_query($con,"select * from hostels where HostelNameId = '$hostelId'")or die('Connection Failed'.mysqli_error());
 $row = mysqli_fetch_row($result);
 if($row){
	//echo $row[0];
 }else{
 echo "not working";
 }
}

?>

<html>
   <head>
      <title>HOSTEL MANAGEMENT</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./material.min.css">
	   <link rel="stylesheet" href="css/style2.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
<script src="./material.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="css/toastr_notificatons.css">
  </head>
  <body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:limegreen;">
  <div class="mdl-layout__header-row">
  <span class="mdl-layout-title">HOSTEL MANAGEMENT SYSTEM</span>
  <div class="mdl-layout-spacer"></div>
  <nav class="mdl-navigation">
   <a class="mdl-navigation__link" href="home.php">Home</a>
               <a class="mdl-navigation__link" href="MyStatus.php">My Status</a>
               <a class="mdl-navigation__link" href="logout.php">Log Out</a>
  </nav>
  </div>
  </header>
  
         <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">MENU</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="home.php">Home</a>
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
		   <center><strong class="lb"><?php echo $row[2];?><strong><center>
          <div>
		<img src="<?php echo $row[6];?>" height="50%" width="50%" /><br />
               
		</div>
		<table border="1%">
		<tr>
		<th>
		NUMBER OF ROOMS IN HOSTEL &#160;
		</th>
		<td>
		<?php echo $row[3];?></td>
		</tr>
		<tr>
		<th>
		FREE SPACE &#160;
		</th>
		<td>
		<?php echo $row[4] - $row[5];?></td>
		</tr>
		<tr>
		<th>
		ELECTRICITY &#160;
		</th>
		<td>
		STABLE</td>
		</tr>
		<tr>
		<th>
		FLOORING &#160;
		</th>
		<td>
		TILED</td>
		</tr>
		<tr>
		<th>
		WATER SUPPLY &#160;
		</th>
		<td>
		STABLE</td>
		</tr>
		<tr>
		<th>
		COMMON ROOM &#160;
		</th>
		<td>
		PRESENT</td>
		</tr>
		<tr>
		<th>
		GENDER &#160;
		</th>
		<td>
		<?php echo $row[1];?></td> &#160;
		</tr>
		
		<tr>
		<td>
		
		<button class="button col-md-10 btn btn-large btn-success"  style="margin-left:50px;">BOOK HOSTEL</button>
	
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
  <script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/toastr_notifications.js" type="text/javascript"></script>
	<script src="js/toastr.min.js" type="text/javascript"></script>
  <script>
  
  $('.button').click(function(){
	  var hostelId ='<?php echo $hostelId;?>';
  var studentId ='<?php echo $bookId;?>';	  
	  $.ajax({
		  type:"POST",
		  url:"book.php",
		  data:{hostelId:hostelId,studentId:studentId}
	  }).done(function(msg){
		  if(msg == "Hostel Booked"){
			   toastr["success"](msg);
		  }else{
			  toastr["error"](msg);
			  
		  }
		 
	  });
	  
  });
  </script>

 
   
   
   
</html>