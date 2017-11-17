<?php session_start(); 
?>
<html>
<head>
<title>CareHack Task</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">


</head>
<body>
<h1> Appointment Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make your Appointment</h2>
			<form action="gcalender.php" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Patient Name</p>
					<input type="text" name="Patient Name" placeholder="" required="required"/>
			</div>	
			<div class="gaps">
				<p>Doctor</p>	
					<select class="form-control">
						<option></option>
						<option>Dr. Giriraj (Cardiac)</option>
						<option>Dr. Sanju (Ophthalmology)</option>
						<option>Dr. Nissi (Neurology)</option>
						<option>Dr. Fredy (Psychology)</option>
						<option>Dr. Shibin (Dermatology)</option>
					</select>
			</div>
			<div class="gaps">
				<p>Appontment Date</p>		
						<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/dd/mm';}" required="required">
			</div>
			<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="Number" placeholder="" required="required"/>
				</div>
				
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Age and Gender</p>
						<input type="text" name="aggen" placeholder="eg: 32 M" required="required" ></input>
				</div>
			<div class="gaps">
				<p>Department</p>	
					<select class="form-control" required="required">
						<option></option>
						<option>Cardiac</option>
						<option>Ophthalmology</option>
						<option>Neurology</option>
						<option>Psychology</option>
						<option>Dermatology</option>
					</select>
			</div>
			
			<div class="gaps">
				<p>Time</p>		
					<input type="text" id="timepicker" name="Time" class="timepicker form-control" value="">	
			</div>
			<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="required" />
				</div>
			</div>
			<div class="button-container"></div>
						  <input type="submit" name= "submit" value="Make an appointment">
			</form>
		</div>
   </div>
   
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		

				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			

</body>
</html>