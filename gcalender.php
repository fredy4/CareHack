<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['date'];
		$b=$_POST['Time'];
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
target="_blank" rel="nofollow">Add to my calendar</a>


</body>
</html>
