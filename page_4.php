<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 4</title>
</head>
<body>
    <h1><?php echo "Page 4"; ?></h1>

    <?php
//PHP Strings
    $my_str = "world";
    //string interpolation only works with double quotes.
    echo "Hello, $my_str.<br>";
    echo 'Hello, $my_str.<br>';

    echo '<pre>Hello\tWorld!</pre>';
    echo "<pre>Hello\tWorld!</pre>"; //\t == tab
    echo 'I\'ll be back<br>';

    $str_2 = "The rain in Spain";
    echo strlen($str_2); //string length
    echo "<br>";

    $str_3 = 'The quick brown fox jumps over the lazy dog.';
    echo str_word_count($str_3);
    echo "<br>";

    //replace text within strings
    $str_4 = 'If the facts do not fit the theory, change the facts.';
    echo str_replace("facts", "truth", $str_4);
    echo "<br>";
    
    //optional fourth argument that counts the number of replacements
    $str_5 = 'If the facts do not fit the theory, change the facts.';
    echo str_replace("facts", "truth", $str_5, $count);
    echo "<br>";
    echo "The text was replaced $count times.";
    echo "<br>";

    //reverse a string
    $str_6 ='You can do anything, but not everything.';
    echo strrev($str_6);
    echo "<br>";

    ?>
    
</body>
</html>