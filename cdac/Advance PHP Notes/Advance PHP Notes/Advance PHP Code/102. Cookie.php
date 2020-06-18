<?php
  // Set Cookie
  setCookie('username', 'Geeky');

  // Set Cookie with Expire Date
  setCookie('username', 'Geeky', time()+60*60*24*10);

  // Access Cookie
  $_COOKIE['username'];

  // Append Cookie
  setCookie('userid', 'geek1');

  // Delete Cookie
  setCookie('username', 'Geeky', time()-3600);

  // Check Cookie Set or Not
  if(isset($_COOKIE['username'])){
    echo "Cookie Set";
  } else {
    echo "Cookie Not Set";
  }
  
?>