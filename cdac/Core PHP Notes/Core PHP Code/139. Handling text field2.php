<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>

<body>
    <!-- HTML Inside PHP -->
    <?php 
        echo "<span>My Fav Site Name is </span>" . "<span style='color: red;'>" . $_GET["sitename"] . "</span>";
    ?>
    
    <!-- PHP inside HTML  -->
    <!-- <span>My Fav Site Name is </span>
    <span style="color: blue;"><?php echo $_GET["sitename"]; ?></span>
     -->
</body>

</html>