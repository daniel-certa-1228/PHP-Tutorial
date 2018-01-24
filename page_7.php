<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 7</title>
</head>
<body>
    <h1><?php echo "Page 7"; ?></h1>

    <?php
//Indexed Array
    $colors = array("Red", "Green", "Blue");
    var_dump($colors);
    echo "<br>";
    print $colors[0] . "<br>";
    //indexes can be assigned manually
    $colors[3] = "Brown";
    $colors[4] = "Black";
    var_dump($colors);
    echo "<br>";
//Associative arrays
    $ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
    var_dump($ages);
    echo "<br>";
    //items can be assigned manually
    $ages['Joe'] = 45;
    $ages['Bob'] = 24;
    var_dump($ages);
    echo "<br>";
//Multidimensional Arrays
    $contacts = array(
        array(
            "name" => "Peter Parker",
            "email" => "peterparker@mail.com",
        ),
        array(
            "name" => "Clark Kent",
            "email" => "clarkkent@mail.com",
        ),
        array(
            "name" => "Harry Potter",
            "email" => "harrypotter@mail.com",
        )
    );
    //accessing nested data
    echo "Peter Parker's email is: " . $contacts[0]["email"] . "<br>";
// print_r gives a little less info than var_dump
    $cities = array("London", "Paris", "New York");
    print_r($cities);
    echo "<br>";
    var_dump($cities);
    echo "<br>";
    
    ?>

    
</body>
</html>