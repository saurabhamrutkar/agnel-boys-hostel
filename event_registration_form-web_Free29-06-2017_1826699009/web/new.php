<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

include "../../db1.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$city = $_POST['city'];
	$email= $_POST['email'];
	$mobile = $_POST['Nokia'];


	$query = "INSERT INTO new(name,city,email,Phone_no) values('$name','$city','$email','$mobile')";
	$y = mysqli_query($connect,$query);
	if($y){
		?>
		<script type="text/javascript">
			alert("Thank you");
		</script>
		<?php
	}
}

?>		
































<!DOCTYPE html>
<html lang="en">
<head>
<title>New Hostel Admission Form :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<style type="text/css">
	#z{
		color: white;
	}
</style>
</head>
<body>

<!-- banner -->
	<div class="center-container">
		<div class="main">
			<h1 class="w3layouts_head">New Admission Form</h1>
			
				<div class="w3layouts_main_grid">
					<form action="" method="POST" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Your Name </label>
								<input type="text" name="name" placeholder="Enter Your Full Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Your Email </label>
								<input type="text" name="email" placeholder="Enter Valid E-mail id" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>City</label>
								<input type="text" name="city" placeholder="City" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Mobile Number</label>
								<input type="text" name="Nokia" placeholder="Valid/Working Phone no" required="">
							</span>
						</div>
						<!-- <div class="saurabh">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" name="Task" placeholder="Password" required="">
								</span>
						</div> -->

					<!-- <div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" name="Task" placeholder="Your Name" required="">
							</span>
						</div> -->
						
						

					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" name="submit" value="Submit">
						</div>
					</div>
						<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<a id="z" href="../../newindex.html">Home</a>
						</div>
					</div>
				</form>
			</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->
			<!-- <div class="w3layouts_copy_right">
				<div class="container">
					<p>© 2018 Hostel Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
				</div>
			</div> -->
		</div>
	</div>

<!-- //footer -->
</body>
</html>