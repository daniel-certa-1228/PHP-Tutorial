<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 2</title>
</head>
<body>
    <h1><?php echo "Page 2"; ?></h1>

<!-- Data types in PHP -->
    <?php
//Integers
    $a = 123;
    var_dump($a);
    echo "<br>";

    $b = -123;
    var_dump($b);
    echo "<br>";

    $c = 0x1a;
    var_dump($c);
    echo "<br>";

    $d = 0123;
    var_dump($d);
    echo "<br>";

// Strings
    $s1 = "String with double quotes.";
    $s2 = 'String with single quotes.';
    $s3 = 'I\'ll add a special character to escape.';
    echo $s1 . "<br>";
    echo $s2 . "<br>";
    echo $s3 . "<br>";

//Floats
    $f1 = 3.14;
    var_dump($f1);
    echo "<br>";

    $f2 = 10.2e3;
    var_dump($f2);
    echo "<br>";

    $f3 = 4e-10;
    var_dump($f3);
    echo "<br>";

//Booleans
    $b1 = true;
    var_dump($b1);
    echo "<br>";

    $b2 = false;
    var_dump($b2);
    echo "<br>";
//Arrays
    $colors = array("Red", "Green", "Blue");
    var_dump($colors);
    echo "<br>";
    
    $color_codes = array(
        "Red" => "#ff0000",
        "Green" => "#00ff00",
        "Blue" => "#0000ff"
    );
    var_dump($color_codes);
    echo "<br>";
    
    ?>
    
</body>
</html>