<?php
echo "Akash gaur<br>";
 session_start();

 $_SESSION["Login"] = "Succesful";
 echo "session start";

 if(isset($_SESSION["Login"]));
 {
     print_r($_SESSION);
 }

 ?>
 
 <?php
 session_unset();
 echo "Destroy succesful";
 ?>