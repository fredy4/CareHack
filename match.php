  <?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
   <?php 	
   $sql=mysql_connect("localhost:8080","root","root123");
   if(!$sql)
  	  {
	   die("Couldn't connect".mysql_error());
	  }
	  else 
	  
  mysql_select_db("carehack",$sql);
  ?>
</head>
<body>
	<?php 
	echo "Hi, ".$_SESSION["otp"];
	$otp=$_SESSION["otp"];
	$uotp=$_POST["otp"];
	echo $otp;
	echo $uotp;
	
	if ($otp==$uotp) {
		# code...
		header("Location:appointment.html");
	}
	else {
		header("Location:logout.php");
		echo "You have entered a wrong OTP. Please try again";
		
	}
	?>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>