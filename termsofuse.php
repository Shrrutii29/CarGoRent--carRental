<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html>
<head>

<title>Car Rental Portal | Terms of Use</title>
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

<img src="assets\images\termsofuse.jpeg" height=150 width=2200>
</section>

<div class="section">
		<div class="container">
			<div class="content-section" align="center">
				 <h3>TERMS OF USE</h3>
				 <br>
				<div class="content" align="left">
					<h5>Welcome to our car rental website. Before using our services, please read these terms of use carefully. By using our website, you agree to be bound by these terms and conditions.</h5>
					
<ul>
<li>Reservation<br>
Our website offers an online reservation system for booking rental cars. To make a reservation, you must provide accurate and complete information about yourself and your rental needs. By making a reservation, you agree to pay the quoted price for the rental period.</li>

<li>Rental Requirements<br>
To rent a car, you must meet our rental requirements, which include a valid driver's license and a minimum age of 21. Additional requirements may apply depending on the location of the rental.</li>

<li>Payment<br>
We accept major credit cards for payment. You will be charged the full amount at the time of booking, and any additional charges incurred during the rental period will be charged to the credit card on file.</li>

<li>Rental Period<br>
The rental period begins at the scheduled pick-up time and ends at the scheduled drop-off time. If you return the car after the scheduled drop-off time, additional charges may apply.</li>

<li>Vehicle Availability<br>
We make every effort to provide the vehicle you reserved, but we reserve the right to substitute a similar or better vehicle at our discretion.</li>

<li>Use of Vehicle<br>
You agree to use the rental car only for its intended purpose and in a safe and legal manner. You are responsible for any damage to the vehicle during the rental period, including damage caused by misuse, negligence, or violation of traffic laws.</li>

<li>Insurance<br>
Our rental cars come with basic insurance coverage, but you may choose to purchase additional insurance coverage at your own expense.</li>

<li>Prohibited Activities<br>
You are prohibited from using the rental car for any illegal activity, including but not limited to transporting illegal substances, driving under the influence of drugs or alcohol, or participating in a race or speed test.</li>

<li>Limitation of Liability<br>
We are not liable for any damages or injuries that occur during the rental period, including but not limited to damage to the rental car, personal injury, or loss of personal property. Our liability is limited to the amount of the rental fee.</li>

<li>Governing Law<br>
These terms of use are governed by the laws of the state where the rental takes place.</li>

<p>By using our website and renting a car through our service, you agree to these terms of use.</p></ul>
				</div>
			</div>
   
  </div>

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
