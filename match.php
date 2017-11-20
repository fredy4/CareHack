  <?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
   <?php include 'mysqliconnect.php';
  ?>
</head>
<body>
	<?php 
	
	$otp=$_SESSION["otp"];
	$uotp=$_POST["otp"];
	
	
	if ($otp==$uotp) {
		
		echo '<script type="text/javascript">';
		echo 'window.location.href="appointment.php";';
		echo '</script>';
	}
	else {
		echo "<script> alert('You have entered a wrong OTP. Please try again.');window.location.href = 'verify.php';</script>";
		
	}
	?>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>
