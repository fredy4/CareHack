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
	echo "Hi, ". $_SESSION["otp"];
	$b=$_SESSION["otp"];
	?>
	<form action="match.php" method ="POST">
	<label for="otp">Enter the OTP sent to your registered mobile number</label><br>
	<input type="text" id="otp" name="otp" required="required"/><br>
	<input type="hidden" name="onetime" value = "<?php echo $b;?>">
    <button type="submit" name="submit">Verify</button>
	 <form>
	
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>