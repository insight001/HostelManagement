<?php
session_start();
if(!isset($_SESSION['AdminId']) ){
    header("location:AdminLogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin | Hostels__ </title>
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
     <link rel="stylesheet" type="text/css" href="css/indigo.css">
      <link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/material.min.css">

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
                        <span class="label label-success"></span>
                    </a>
                    

                </li>
                <!--tasks-->
                <li class="dropdown tasks-menu hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-edit black fa-2x"></i>
                        <span class="label label-primary"></span>
                    </a>
                   
                </li>
                
                <!-- Notifications: style can be found in dropdown-->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-remove fa-2x"></i>
                        <span class="label label-warning"></span>
                    </a>
                   
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="avatar1.png" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                               Admin
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
                            <p>Admin</p>
                        </li>
                        <!-- Menu Body -->
                       
                        </li>
                        <li role="presentation"></li>
                        <li><a href="edit_user.html"> <i class="fa fa-fw fa-gear"></i> Account Settings </a></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="Adminlogout.php">
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
    <aside class="left-side sidebar-offcanvas" style="min-height:727px;">
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
                              Admin
                            </h4>
                            <ul class="icon-list">
                               
                                <li>
                                    <a href="adminlogout.php">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="hostels.php">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">DASHBOARD</span>
                        </a>
                    </li>
                    <li>
                        <a href="applications.php?1">
                            <i class="menu-icon fa fa-fw fa-chain"></i>
                            <span class="mm-text ">JIBOWU</span>
                        </a>
                    </li>
                   <li>
                        <a href="applications.php?6">
                            <i class="menu-icon fa fa-fw fa-database"></i>
                            <span class="mm-text ">AKINDẸKO</span>
                        </a>
                    </li>
                    <li>
                        <a href="applications.php?3">
                            <i class="menu-icon fa fa-fw fa-user"></i>
                            <span class="mm-text ">ABIOLA</span>
                        </a>
                    </li>
                    <li>
                        <a href="applications.php?4">
                            <i class="menu-icon fa fa-fw fa-lock"></i>
                            <span class="mm-text ">JADESOLA</span>
                        </a>
                    </li>
                    <li>
                        <a href="applications.php?2">
                            <i class="menu-icon fa fa-fw fa-eye"></i>
                            <span class="mm-text ">ADENIYI</span>
                        </a>
                    </li>
                    <li>
                        <a href="applications.php?5">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span class="mm-text ">JIBOWU ANNEX</span>
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
            
            </ol>
        </section>
        <!-- Main content -->
       <div>
      <table class="table-responsive">
        <tr>
        <td>
           <div class="wide-card mdl-card5 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">JIBOWU</h3>
            </div>
            <div class="mdl-card__supporting-text">
              FEMALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?1">VIEW APPLICANTS</a>
            </div>
            
         </div>
        </td>
        <td>
          <div class="wide-card mdl-card4 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">AKINDEKO</h3>
            </div>
            <div class="mdl-card__supporting-text">
               MALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?6">VIEW APPLICANTS</a>
            </div>
           
         </div>
        </td>
        </tr>             
        <tr>
         <td>
                      <div class="wide-card mdl-card3 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">JADESOLA</h3>
            </div>
            <div class="mdl-card__supporting-text">
               FEMALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?4">VIEW APPLICANTS</a>
            </div>
           
         </div>
        </td>
        <td>
        <div class="wide-card mdl-card2 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">ABIOLA</h3>
            </div>
            <div class="mdl-card__supporting-text">
               MALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?3">VIEW APPLICANTS</a>
            </div>
           
         </div>

        </td>
        </tr> 
        <tr>
         <td>
          <div class="wide-card mdl-card1 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">ADENIYI</h3>
            </div>
            <div class="mdl-card__supporting-text">
              MALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?2">VIEW APPLICANTS</a>
            </div>
          
         </div>
        </td>
        <td>
         <div class="wide-card mdl-card6 mdl-shadow--2dp">
            <div class="mdl-card__title">
               <h3 class="mdl-card__title-text">JIBOWU ANNEX</h3>
            </div>
            <div class="mdl-card__supporting-text">
             FEMALE
            </div>
            <div class="mdl-card__actions mdl-card--border">
               <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="applications.php?5">VIEW APPLICANTS</a>
            </div>
          
         </div>
        </td>
        </tr> 



         </table>

       </div>					
							
							
		

        <!-- /.content -->
    </aside>
 
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
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->


</body>

<script src="js/app.js" type="text/javascript"></script>
<script src="material.min.js" type="text/javascript"></script>
<script src="js/toastr_notifications.js" type="text/javascript"></script>
<script src="js/toastr.min.js" type="text/javascript"></script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>       

</html>
