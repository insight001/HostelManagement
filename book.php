<?php
function book($hostelId,$studentId){	
 	$connect = mysqli_connect("localhost","root","");
	if(!$connect){
		die('Connection 2 failed'.mysqli_error());
		echo "Not Working";
	}else{
		
		mysqli_select_db($connect,"hmdata");
		$report = mysqli_query($connect,"SELECT BookId FROM bookings WHERE BookersId = '$studentId'") or die('Connection 3 failed'.mysqli_error());
			$row = mysqli_fetch_row($report);
			if($row){
				echo "You have Applied Once You cant Apply Again! Check Your Status for Approval";
			}else{
				
				
				$report_2 = mysqli_query($connect,"INSERT INTO bookings(`BookersID`, `HostelId`, `Status`) VALUES($studentId,$hostelId,3)")or die('Connection 4 failed'.mysql_error());
				if($report_2){
					echo "Hostel Booked";
				}else{
					echo "An Error Occured While Processing your Request";
				}
				
			}
			
	}
	
	
}

echo book($_POST["hostelId"],$_POST["studentId"]);


?>