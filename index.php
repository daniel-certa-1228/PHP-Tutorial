<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple PHP File | Page 1</title>
</head>
<body>
    <h1><?php echo "Hello, world!"; ?></h1>
    <?php
    // Variable names are case sensitive.
        $color = "blue";
        $Color = "green";
        $COLOR = "red";
        echo "The color of the sky is $color.<br>";
        echo "The color of the grass is $Color.<br>";
        echo "The color of the baloon is $COLOR.<br>";

    //functions and class names are NOT case sensitive.
        $color_2 = "brown";
        echo gettype($color_2) . "<br>";
        echo GETTYPE($color_2) . "<br>";

    // variables
        $text = "This is a string.";
        $number = 526;
        echo $text . "<br>";
        echo $number . "<br>";

    //constants
        define("SITE_URL", "https://www.example.com/");
        echo "Thank you for visiting " . SITE_URL . "!<br>";
        //constants don't have the "$"

    // echo statements
        echo "First echo statement";
        echo "<h4>Echo statement in an h4.</h4>";
        echo "<h4 style='color: red;'>Red echo statement in an h4.</h4>";

        $txt = "More teeeeext.";
        $nums = 123456789;
        $array = array("Red", "Green", "Blue");
        echo $txt . "<br>";
        echo $nums . "<br>";
        echo $array[0] . "<br>";
        echo $array[1] . "<br>";
        echo $array[2] . "<br>";
    
    // print statements - works like echo except it can only output one string.  It also returns a string as a value.
        print "This is a print statement.<br>";
        print "<h4>This is a print statement in an h4.</h4>";
        print "<h4 style='color: red;'>This is a red print statement in an h4.</h4>";
    ?>
</body>
</html>
