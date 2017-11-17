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
		echo $c;
		//convert local time to UTC
		/*$datetime = $c;
		$tz_from = 'Asia/Kolkata';
		$tz_to = 'UTC';
		$format = "Y:M:d:H:m";

	$dt = new DateTime($datetime, new DateTimeZone($tz_from));
	$dt->setTimeZone(new DateTimeZone($tz_to));
	echo $dt->format($format) . "\n";*/
}

?>

<!-- <a href="http://www.google.com/calendar/event?
action=TEMPLATE
&text=Doctor's+Appointment
&dates=20171116T031500Z/20171130T231512Z
&details=[Attempt]
&location=[CareHack]
&trp=false
&sprop=
&sprop=name:"
target="_blank" rel="nofollow">Add to my calendar</a> -->

</body>
</html>
