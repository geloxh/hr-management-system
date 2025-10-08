<?php
    session_start();
     
    if(!isset($_SESSION['User']))
    {
        header('location:index.php');exit();
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php 
            $page_title ="";
            if(strstr($_SERVER['PHP_SELF'], 'home.php') !== false) {
            $page_title = "Home - ";
            }
        ?>
        <title><?= $page_title ?>HRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Human Resource Management System, HRIS, Login"/>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/morris.css" type="text/css"/>
        <link href="assets/stylesheets/main.css" rel="stylesheet"/>
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->

        <!-- datepicker-->
        <link rel="stylesheet" type="text/css" href="dp/jquery.datetimepicker.css"/>
        <script src="dp/jquery.datetimepicker.full.js"></script>
        <?php 
            date_default_timezone_set("Asia/Kolkata"); 
        ?>

    </head>

    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
	            <div class="mother-grid-inner">
                    <!--header start here-->
			        <div class="header-main">
					    <div style="padding: 1.15em; margin-right: 0%; width: 70%;" class="logo-w3-agile">
						    <h1 clas><a href="index.php">HRM</a></h1>
					    </div>
					    <div class="profile_details w3l" style="float: right; width: 29%;">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								    <div class="profile_img">	
									    <span class="prfil-img"><img src="image/<?php echo $_SESSION['User']['ImageName']?>" alt=""> </span> 
									    <div class="user-name">
										    <p><?php echo $_SESSION['User']['FirstName']."&nbsp;".$_SESSION['User']['LastName']; ?></p>
										    <span><?php echo $_SESSION['role']['Name']; ?></span>
									    </div>
									    <i class="fa fa-angle-down"></i>
									    <i class="fa fa-angle-up"></i>
									    <div class="clearfix"></div>	
								    </div>	
								</a>
						        <ul class="dropdown-menu drp-mnu">
						            <li> <a href="profile.php"><i class="fa fa-user"></i>Profile</a></li> 
						            <li> <a href="controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
						        </ul>
							</li>
						</ul>
					</div>
							
				    <div class="clearfix"> </div>	
				</div>
