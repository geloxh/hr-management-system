<?php
	$result ="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Page - HRIS</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="Human Resource Management System, HRIS, Login" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
			<!-- Custom CSS -->
			<link href="css/style.css" rel='stylesheet' type='text/css' />
			<link rel="stylesheet" href="css/morris.css" type="text/css"/>
			<link href="assets/stylesheets/main.css" rel='stylesheet' type='text/css' />
			<!-- Graph CSS -->
			<link href="css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="css/jquery-ui.css"> 
			<!-- jQuery -->
			<script src="js/jquery-2.1.4.min.js"></script>
			<!-- //jQuery -->
			<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
			<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
			<!-- lined-icons -->
			<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
			<!-- //lined-icons -->
			<style>
	</head> 
<body>
	<div class="main-wthree">
		<div class="container">
			<h1 class="text-center text-white">Human Resource Management System</h1>
		<div class="sin-w3-agile">
			<h2>Login In</h2>
			<form action="controller/login.php" method="post">
				<div class="email">
					<span class="email">Email:</span>
					<input type="Email" name="name" class="name"  placeholder="Enter Email Address">
					<div class="clearfix"></div>
				</div>
				<div class="password-agileits">
					<span class="username">Password: <i class="fa fa-eye-slash" aria-hidden="false" style="padding-left: 20px;" onclick="passwordeyes(this);"></i></span>
					<input type="password" name="password" id="Psw" class="password"  placeholder="Enter Password">
					<div class="clearfix"></div>
				</div>
				<h4 style="color: #F1C40F;"><?php echo $result; ?></h4>
				
				<div class="login-w3">
					<input type="submit" name="submit" class="login" value="Sign In">
				</div>
				<div class="clearfix"></div>
				<h5 class="text-center"><a href="./user" class="text-white" >Login as an Employee</a></h5>
				<div class="clearfix"></div>
			</form>
			
			<div class="back">
				<a href="index.php">Back to home</a>
			</div>
			<div class="footer">
				<p>Human Resource Managemant System. All Rights Reserved &copy; <?= date("Y") ?> </p>
			</div>
		</div>
		</div>
	</div>
	<script src="assets/scripts/main.js"></script>
</body>
</html>
