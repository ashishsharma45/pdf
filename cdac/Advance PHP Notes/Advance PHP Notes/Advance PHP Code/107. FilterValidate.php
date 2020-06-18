<?php
// Validate EMail using Filter
 $email = 'contact@geekyshows.com';
 $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
 if($vemail == FALSE) {
    echo "Invalid Email <br>";
 } else {
  echo "Email is Valid ". $vemail ."<br>";
 }

 // Validate Float/Double using Filter
 $price = 10.25;
 $vprice = filter_var($price, FILTER_VALIDATE_FLOAT );
 if($vprice == FALSE) {
   echo "Invalid Price <br>";
 } else {
  echo "Price is Valid ". $vprice ."<br>";
 }
 echo gettype($vprice);
  
?>