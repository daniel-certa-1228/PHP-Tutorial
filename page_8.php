<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 8</title>
</head>
<body>
    <h1><?php echo "Page 8"; ?></h1>
    <?php
//Sorting 
    //Sort MUTATES the array
    $colors = array("Red", "Green", "Blue", "Yellow");
    print_r($colors);
    echo "<br>";
    sort($colors);
    print_r($colors);
    echo "<br>";
    // Sort nums
    $numbers = array(10,9,8,7,6,5,4);
    sort($numbers);
    print_r($numbers);
    echo "<br>";
    // reverse sort strings
    $more_colors = array("Red", "Green", "Blue", "Yellow");
    rsort($more_colors);
    print_r($more_colors);
    echo "<br>";
    //reverse sort nums
    $more_nums = array(3,6,4,7,1,99,8,7);
    rsort($more_nums);
    print_r($more_nums);
    echo "<br>";

    //sort associative arrays in ascending order by value
    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    asort($age);
    print_r($age);
    echo "<br>";
    //sort associative arrays in DEscending order by value
    $more_age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    arsort($more_age);
    print_r($more_age);
    echo "<br>";
    //Sorting Associative Arrays in Ascending Order By Key
    $age_2 = array("Bob"=>20, "Wang"=>14, "Jed"=>45, "Cletus"=>35);
    ksort($age_2);
    print_r($age_2);
    echo "<br>";
    //Sorting Associative Arrays in Descending Order By Key
    $age_3 = array("Bob"=>20, "Wang"=>14, "Jed"=>45, "Cletus"=>35);
    krsort($age_3);
    print_r($age_3);
    echo "<br>";

    ?>

</body>
</html>