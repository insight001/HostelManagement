<?php
	function approve($bookersId,$hostelId){
		$roomNumber = 0;
		
		if($hostelId != null AND $bookersId != null){
			$connect = mysqli_connect("localhost","root","");
			mysqli_select_db($connect,"hmdata");
			if(!$connect){
				
				die('Connection failed 2'.mysqli_error($connect));
			}else{
				
				$respond = mysqli_query($connect,"SELECT * FROM hostels WHERE HostelNameId = $hostelId") or die('Connection error'.mysqli_error($connect));
				$rowws = mysqli_fetch_array($respond,MYSQLI_ASSOC);
				$freeSpace = $rowws["BedSpace"] - $rowws["AllocatedBedSpace"];
				if($freeSpace == 0 || $freeSpace == null){
					echo "No  free BedSpace";
					
				}
				else{
					
						if($rowws["AllocatedBedSpace"]%4  != 0){
							
					$roomNumber = $rowws["AllocatedRoomNumber"];  
					
						}
						else{
							
					$roomNumber =	$rowws["AllocatedRoomNumber"] + 1;
						}
						
					$respond2 = mysqli_query($connect,"UPDATE hostels SET AllocatedBedSpace = AllocatedBedSpace + 1, AllocatedRoomNumber =$roomNumber WHERE HostelNameId = $hostelId  ") or die('Connection 5 error'.mysql_error($connect));
					$respond3 = mysqli_query($connect,"UPDATE bookings SET Status = 1, RoomNumber = $roomNumber WHERE bookersId =$bookersId") or die('Connection 6 failed'.mysql_error($connect));
					
						
				
				}
				
			}
			
			
		}
		return "Hostel Approved";
		
		
	}
	
	function Disapprove($bookersId){
		if($bookersId  != null){
			
			$con = mysqli_connect("localhost","root","");
			if($con){
				mysqli_select_db($con,"hmdata");
				$result = mysqli_query($con,"DELETE FROM bookings WHERE bookersId = $bookersId");
				//$update = mysql_query("UPDATE bookings SET status = 3 WHERE bookersid =$bookersId");
				if($result){
					echo "Application Disapproved. ";
				}else{
					echo "An Error Occured";
				}
				Return "Successfully";
			}
			
			
			
		}else{
			echo "Student Data Absent";
		}
		
		
		
	}
	if($_POST["myid"] == 1){
	echo approve($_POST["bookersId"],$_POST["hostelId"]);
	}else{
		echo Disapprove($_POST["bookersId"]);
	}