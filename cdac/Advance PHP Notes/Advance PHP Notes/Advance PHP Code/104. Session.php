<?php
  // Start Session
  session_start();

  // Set Session Variable
  $_SESSION['username'] = 'Geekyshows';
  $_SESSION['password'] = '123456';

  // Access Session Variable
  echo $_SESSION['username'] . "<br>";
  echo $_SESSION['password'] . "<br>";

 // Check if session variable set or not
 if(isset($_SESSION['username'])){
   echo "Session Variable Set";
 } else {
   echo "Session Variable Not Set";
 }

 // Unset one single session variable
 unset($_SESSION['username']);

 // Unset All Session Variables
 session_unset();

 // Destroy Session
 session_destroy();
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

</body>

</html>