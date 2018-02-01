<?php
session_start();
$_SESSION['firstname'] = "Tony";
$_SESSION['lastname'] = 'Stark';
// session_destroy();  //ends the session
// OR
// remove session data
// if(isset($_SESSION['lastname'])){
//     unset($_SESSION['lastname']);
// }
?>
<!-- session start must be the VERY FIRST THING on the page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 19</title>
</head>
<body>

    <h1><?php echo "Page 19"; ?></h1>

    <?php
        echo "Hi, " . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "!";
    ?>

</body>
</html>