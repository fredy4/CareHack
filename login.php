<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title> CareHack Task </title>
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
		if(isset($_POST['phone'])){
			$id=$_POST['phone'];
			$pass=$_POST['password'];
			if(($_POST['submit'])=='register'){
	
				$fnm=$_POST['fname'];
				$lnm=$_POST['lname'];
				
				mt_rand();
				$a=mt_rand();
				mysql_query("INSERT INTO patient (mno, fname, lname, otp) VALUES ('".$id."','".$fnm."', '".$lnm."','".$a."')");
	//$tmp=mysql_fetch_array(mysql_query("SELECT * FROM patient where mno =  	'2147483647'"));
		//print_r($tmp);
				
				$_SESSION['log']=1;
			    $_SESSION['fname']=$_POST['fname'];
			    $_SESSION['mno']=$_POST['phone'];
			    $_SESSION['type']='p';
			     $_SESSION['otp']=$a;

			    /*$apiKey = urlencode('0KRseuhcuMs-cjLcUUmo6Zs18R7wV2dW0nvpxlSnMN');
    	
    	// Message details
		    	$numbers = array($id);
		    	$sender = urlencode('TXTLCL');
		    	$message = rawurlencode('Your OTP is '.$a);
		     
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
		    	echo $response;*/
			    //header("Location:verify.php");
			}

			elseif ($_POST['submit']=='login') {
				$tmp=mysql_fetch_array(mysql_query("SELECT * FROM patient where mno = '$id' and password='$pass'"));
				if($tmp){
					$_SESSION['log']=1;
					$_SESSION['type']='p';
					$_SESSION['mno']=$id;
					header("Location:appointment.php");

				}
				else{
					unset($_SESSION["log"]);
					unset($_SESSION["type"]);
					header("Location:index.php");
				}
			}

		}
	?>

</body>
</html>