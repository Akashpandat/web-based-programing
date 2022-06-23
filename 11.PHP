<!DOCTYPE html>
<?php
echo "Akash gaur<br>";
$cookie_name = "user";
$cookie_value = "Akash gaur";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
echo '<script>alert("COOKIE ALERT!! WANT TO ACCEPT?")</script>';
?>
<html>

<body>

     <?php
     if (isset($_COOKIE[$cookie_name])) 
     {
          echo "Cookie '" . $cookie_name . "' is set! <br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
         
     } else {
          echo "Cookie named '" . $cookie_name . "' is not set!";
     }
     ?>

</body>  

</html>