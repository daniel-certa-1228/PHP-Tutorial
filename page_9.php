<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 8</title>
</head>
<body>
    <h1><?php echo "Page 9"; ?></h1>

    <?php
//PHP loops
    //while loop
    //a while loop may never run if the condition is already met.
    $i = 1;
    while ($i <= 3) {
        $i++; //This loop increments the num first
        echo "The number is " . $i . "<br>"; //THEN prints the loop.
    }    //The output is 2,3,4 because of the order of operations.
    echo "<br>";

    // do...while loop
    //the do...while loop will always be exuecuted once
    $i = 1;
    do {
        $i++; //This loop increments the num first
        echo "The number is " . $i . "<br>"; //THEN prints the loop.        
    }
    while ($i <= 3);//The output is 2,3,4 because of the order of operations.
    echo "<br>";

    //for loop
    for($i = 1; $i<=3; $i++) {
        echo "The number is " . $i . "<br>";
    } //output is 1,2,3 because the increment comes last.
    echo "<br>";

    //for each loop for arrays
    $colors = array("Red", "Green", "Blue");
    
    foreach($colors as $color) {
        echo $color . "<br>";
    }

    ?>

</body>
</html>