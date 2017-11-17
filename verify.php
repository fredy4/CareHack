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
   <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>    
</head>
<body>
<div>
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
	</div>
</body>
</html>