<?php setcookie("username", "Bev Bevin", time()+30*24*60*60); ?>
<!-- php cookie has to be THE VERY FIRST THING on the page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 18</title>
</head>
<body>
    <h1><?php echo "Page 18"; ?></h1>
    <h2>Cookies</h2>

    <?php
    //setcookie(name, value, expire, path, domain, secure);
    echo $_COOKIE["username"] . "<br>";

    if(isset($_COOKIE['username'])) {
        echo "Hello, " . $_COOKIE['username'] . "<br>";
    }  else  {
        echo "Welcome, guest." . "<br>";
    }

    print_r($_COOKIE);

    //remove a cookie
    //This would have to be AT THE TOP
    // setcookie("username", "", time()-3600);
    ?>

</body>
</html>