<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title> CareHack Task </title>
   <?php include "mysqliconnect.php";
  ?>
</head>
<body>
	<?php 
		if(isset($_POST["phone"])){
			$id=$_POST["phone"];
			if(($_POST["submit"])=="register"){
	
				$fnm=$_POST["fname"];
				$lnm=$_POST["lname"];
				//otp number
				mt_rand(1000,4000);
				$a=mt_rand();
				//username
				function random_code($limit)
				{
				    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
				}
 
				$usr=random_code(5);
				
			$insert= "INSERT INTO patient (mno, fname, lname, otp, username) VALUES ('".$id."','".$fnm."', '".$lnm."','".$a."','".$usr."')";
			mysqli_query($conn,	$insert);
				
				$_SESSION["log"]=1;
			    $_SESSION["fname"]=$_POST["fname"];
			    $_SESSION["mno"]=$_POST["phone"];
			    $_SESSION["type"]="p";
			    $_SESSION["otp"]=$a;
			    $_SESSION["username"]=$usr;
			    $apiKey = urlencode('0KRseuhcuMs-cjLcUUmo6Zs18R7wV2dW0nvpxlSnMN');
    	
    	// Message details
    	$numbers = array($id);
    	$sender = urlencode('TXTLCL');
    	$message = rawurlencode('Your otp is '.$a.' Your username is '.$usr);
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
    	
    	// Process your response here
    	//echo $response;
				echo '<script type="text/javascript">';
				echo 'window.location.href="verify.php";';
				echo '</script>';
			}

			elseif ($_POST["submit"]=="login") {
					$tmp=mysqli_fetch_array('SELECT * FROM patient where mno ="$id" and username="$usr"');
					mysqli_query($conn,	$tmp);
					if($tmp){
						$_SESSION["log"]=1;
						$_SESSION["type"]="p";
						$_SESSION["mno"]=$id;
						echo '<script type="text/javascript">';
						echo 'window.location.href="appointment.php";';
						echo '</script>';

				}
			}
				else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:index.php");
				}
			

		}
	?>

</body>
</html>