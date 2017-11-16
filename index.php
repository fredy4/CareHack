<?php session_start(); 
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CareHack Task</title>
  <?php 
      if(isset($_SESSION["log"])){
       if($_SESSION["log"]==1&&$_SESSION["type"]=="d")
         header("Location:doc.php");
       elseif($_SESSION["log"]==1&&$_SESSION["type"]=="p")
         header("Location:patient.php");
       
      } 
      ?>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/styles.css">

  
</head>
<body>
<div class="pen-title">
  <h1>Login</h1><span>
</div>
<div class="rerun"><a href="">Rerun Pen</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="login.php" method="post">
      <div class="input-container">
        <input type="tel" id="phone" required="required"/>
        <label for="phone">Mobile</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit" value="login"><span>Go</span></button>
      </div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="login.php" method="post">
      <div class="input-container">
        <input type="text" id="fname" name="fname" required="required"/>
        <label for="fname">First Name</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="text" id="lname" name="lname" required="required"/>
        <label for="lname">Last Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="tel" id="phone" name="phone" required="required"/>
        <label for="phone">Mobile</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
      <button type="submit" name="submit" value="register"><span>Next</span></button>  
      </div>
    </form>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
