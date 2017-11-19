<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>CareHack Task</title>
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
	if(isset($_POST["submit"]))
	{
		$a=$_POST["date"];
		$b=$_POST["Time"];
		$c= $a." ".$b;
		//convert local time to UTC
		 $datetime = preg_replace('/\s+/', '', $c);

		// $datetime =  '08/22/2015 10:56 PM';;
		$tz_from = 'Asia/Kolkata';
		$tz_to = 'UTC';
		$formata = "Ymd\THis\Z";
		$formatb ="d:m:Y h:i:s a";

	$dt = new DateTime($datetime, new DateTimeZone($tz_from));
	$dt->setTimeZone(new DateTimeZone($tz_to));
	echo "Your appointment fixed on :".$dt->format($formatb)."(UTC time)<br/>";

}

?>


<a href="http://www.google.com/calendar/event?
action=TEMPLATE
&text=Doctor's+Appointment
&dates=<?php echo $dt->format($formata)."/".$dt->format($formata);?>
&details=[Attempt]
&location=[CareHack]
&trp=false
&sprop=
&sprop=name:"
target="_blank" rel="nofollow">Add to my calendar</a><li></li>
<a href="appointment.php">Go back</a>
<a href="logout.php" style="color:red">Logout</a>
</div>
</body>
</html>
