<?php
         $dbhost = 'localhost';
         $dbuser = 'id3656188_root';
         $dbpass = 'root123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         mysqli_select_db($conn,"id3656188_carehack");
?>