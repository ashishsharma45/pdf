<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>
<body>    
    Family Members Are: <br>
    <?php
      $famdata = $_REQUEST["family"];        
      echo str_replace("\n", "<br>", $famdata);
    ?>
</body>
</html>