<?php
// Sanitize EMail using Filter
 $email = 'con//////tact@geekys((()))hows.com';
 $vemail = filter_var($email, FILTER_SANITIZE_EMAIL);
 echo "Email is: ". $vemail ."<br><br>";

 // Validation and Sanitization
 $email = 'conta///ct@geekyshows.com';
 $semail = filter_var($email, FILTER_SANITIZE_EMAIL);
 $vemail = filter_var($semail, FILTER_VALIDATE_EMAIL);
 if($vemail == FALSE) {
    echo "Invalid Email <br>";
 } else {
	 echo " Valid and Sanitized EMail: ". $vemail ."<br>";

 }
 
?>