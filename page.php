<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html>
<head>

<title>Car Rental Portal | Page details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">

<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

        
<!--Header-->
<?php include('includes/header.php');?>
    

<!--About us-->                 
<img src="assets\images\abt.jpeg" height=150 width=2200>
</section>

<div class="section">
		<div class="container">
			<div class="content-section" align="center">
				 <h3>ABOUT US</h3>
				 <br>
				<div class="content">
					<h5>We offer a varied fleet of cars, from compact range.</h5>
					
					<p>Welcome to our car rental website! We are a reliable and professional car rental company committed to providing you with excellent service and high-quality rental vehicles.</p>
<p>
Our mission is to make your car rental experience as seamless and stress-free as possible. Whether you need a rental car for a business trip, a family vacation, or any other reason, we have a wide range of vehicles to choose from to suit your needs.</p>
<p>
We take pride in offering affordable rates and flexible rental options, so you can enjoy the convenience and freedom of having your own vehicle without breaking the bank. Our team of experienced and friendly professionals is dedicated to helping you every step of the way, from selecting the right vehicle to providing you with excellent customer service throughout your rental period.</p>
<p>
So why choose us for your next car rental? Because we are committed to your satisfaction and strive to exceed your expectations with every rental. Contact us today to learn more about our services and how we can help you with your transportation needs.</p>
				</div>
			</div>
   
  </div>

<!-- /About-us--> 


<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>
