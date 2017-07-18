<?php
$hostel = $_SERVER["QUERY_STRING"];
if($hostel == null){

header("location:Hostels.php");
}else{

  $con  = mysqli_connect("localhost","root","");
  if(!$con){
 die('Connection Failed'.mysqli_error($con));
  }
  mysqli_select_db($con,"hmdata");
 $query2 = mysqli_query($con,"Select * from bookings where hostelId = $hostel");
 $count_book = mysqli_num_rows($query2);
 $query3 = mysqli_query($con, "select * from bookings where hostelId = $hostel AND Status = 0");
 $count_disapprove  = mysqli_num_rows($query3);
 $query4 = mysqli_query($con,"select * from bookings where hostelId = $hostel AND Status = 1");
 $count_approve  = mysqli_num_rows($query4);
 $esi = mysqli_query($con,"select Gender,AllocatedRoomNumber,HostelName,NoOfRooms,BedSpace,AllocatedBedSpace from hostels where HostelNameId = $hostel")or die('Connection Failed1'.mysqli_error($con));
    $rows = mysqli_fetch_array($esi, MYSQLI_ASSOC);
    
    $Hostel_name = $rows["HostelName"];
    $bedSpace_left = $rows["BedSpace"] - $rows["AllocatedBedSpace"];
    $AllocatedBedSpace =$rows["AllocatedBedSpace"];
    $Total_BedSpace = $rows["BedSpace"];
    $Current_Room = $rows["AllocatedRoomNumber"];
    $Rooms_left = $rows["NoOfRooms"] - $rows["AllocatedRoomNumber"];

?>

<!DOCTYPE html>
<html>


<!-- Mirrored from dev.lorvent.com/core_plus/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 09:55:10 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Admin | Applications </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">    
    <link rel="stylesheet" type="text/css" href="css/bootstrap_tables.css">

    <!-- end of global css -->
</head>

<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="preloader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index-2.html" class="logo">
            <!-- Add the class icon to your logo <img src="logo.jpg" alt="logo" style="width:230px;height:89px;"/>                   image or logo icon to add the margining -->
            
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                            class="fa fa-fw fa-check  -o black fa-2x"></i>
                        <span class="label label-success"><?php echo $count_approve; ?></span>
                    </a>
                    

                </li>
                <!--tasks-->
                <li class="dropdown tasks-menu hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-edit black fa-2x"></i>
                        <span class="label label-primary"><?php echo $count_book; ?></span>
                    </a>
                   
                </li>
                
                <!-- Notifications: style can be found in dropdown-->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-remove fa-2x"></i>
                        <span class="label label-warning"><?php echo $count_disapprove; ?></span>
                    </a>
                   
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="avatar1.png" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                Natali
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="avatar1.png" class="img-circle" alt="User Image">
                            <p> Nataliapery</p>
                        </li>
                        <!-- Menu Body -->
                       
                        </li>
                        <li role="presentation"></li>
                        <li><a href="edit_user.html"> <i class="fa fa-fw fa-gear"></i> Account Settings </a></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="login.html">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="avatar1.png" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                Nataliapery
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="index-2.html">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard V1</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span class="mm-text ">Dashboard V2</span>
                        </a>
                    </li>
                   

                   
                   
                   
                   
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Blank</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li> Applications</li>
                <li class="active">
                    <a href=""><?php echo $Hostel_name ?></a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
       <div class="row col-md-8">
                <div class="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:100px;">
                              <center>  <i class="fa fa-fw fa-home"></i><?php echo $Hostel_name ?></center>
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                <tbody>

<thead><tr> <th>STUDENT NAME</th><th>MATRIC NUMBER</th><th>DEPARTMENT</th><th>LEVEL</th><th>ACTIONS</th></tr></thead><tbody>
    <?php 
 $result = mysqli_query($con,"select BookersId from bookings where HostelId = $hostel AND Status =0 OR hostelId = $hostel AND Status =3")or die('Connection Failed'.mysqli_error($con));

 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   $num = $row["BookersId"];
  $retVal = mysqli_query($con,"SELECT StudentId,StudentName,Level,MatricNumber,dept from Student_table where StudentId ='$num'") or die('Connection 2 failed'.mysqli_error($con));
   $rows = mysqli_fetch_array($retVal, MYSQLI_ASSOC);
       
       $html ='<tr><td>'.$rows["StudentName"].'</td><td>'.$rows["MatricNumber"].'</td><td>'.$rows["dept"].'</td><td>'.$rows["Level"].'</td><td><a id='.$rows["StudentId"].' class="button btn btn-primary" Value="Approve">Approve</a>|<a id='.$rows["StudentId"].' class="button btn btn-danger" Value="Disapprove">Disapprove</a></input></td></tr>';
        
      echo $html;
       
       
       
   
      
      
}
if(!isset($num)){
            echo  '<h3><em><strong>No Student Appplied Yet.</strong></em></h3>';
        }
}
?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="row col-md-4">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:115px;">
                                <i class="fa fa-fw fa-home"></i><?php echo $Hostel_name ?>'s Status
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<table  class="table table-bordered">
<tr>
<th>
<strong>TOTAL BEDSPACE</strong>
</th>
<th>
<strong><?php echo $Total_BedSpace; ?></strong>
</th>
</tr>
<tr>
<th>
<strong>ALLOCATED BEDSPACE</strong>
</th>
<th>
<strong><?php echo $AllocatedBedSpace; ?></strong>
</th>
</tr>
<tr>
<th>
<strong>BEDSPACE LEFT</strong>
</th>
<th>
<strong><?php echo $bedSpace_left; ?></strong>
</th>
</tr>
<tr>
<th>
<strong>ROOMS LEFT</strong>
</th>
<th>
<strong><?php echo $Rooms_left; ?></strong>
</th>
</tr>
<tr>
<th>
<strong>ALLOCATED ROOMS</strong>
</th>
<th>
<strong><?php echo $Current_Room; ?></strong>
</th>
</tr>
</table>
	</div>
</div>	
</div>
							
							
							
		<section class="content p-l-r-15">
            <div id="right">
                
                </div>
            </div>
        </section>

        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->


</body>

<script src="js/app.js" type="text/javascript"></script>
<script src="material.min.js" type="text/javascript"></script>
<script src="js/toastr_notifications.js" type="text/javascript"></script>
<script src="js/toastr.min.js" type="text/javascript"></script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>       
<script>
    $(".btn-primary").click(function (){
        var val="<?php echo $hostel;?>";
    var d = $(this).prop("id"); 
    //alert(d);
        $.ajax({
            type:"POST",
            url:"prequest.php",
            data:{bookersId:d,hostelId:val,myid:1}
        }).done(function(msg){
            if(msg == "Hostel Approved"){
                location.reload(true);
                toastr["success"](msg + " Refresh to see changes!");
                
            }else{
                toastr["error"](msg);
            }
    
            
        })
    });
    
    
        $(".btn-danger").click(function (){
        var val="<?php echo $hostel;?>";
    var d = $(this).prop("id"); 
    //alert(d);
        $.ajax({
            type:"POST",
            url:"prequest.php",
            data:{bookersId:d,hostelId:val,myid:2}
        }).done(function(msg){
                toastr["success"](msg);
            
    
            
        })
    });
    
    
    


</script>
<!-- Mirrored from dev.lorvent.com/core_plus/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 09:55:10 GMT -->
</html>
