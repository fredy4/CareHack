  <?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
   <?php include 'mysqlconnect.php';
  ?>
</head>
<body>
	<?php 
	//echo "Hi, ".$_SESSION["otp"];
	$otp=$_SESSION["otp"];
	$uotp=$_POST["otp"];
	echo $otp;
	echo $uotp;
	
	if ($otp==$uotp) {
		
		header("Location:appointment.php");
	}
	else {
		echo "<script> alert('You have entered a wrong OTP. Please try again.');window.location.href = 'verify.php';</script>";
		
	}
	?>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>
