<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 6</title>
</head>
<body>
    <h1><?php echo "Page 6"; ?></h1>

    <?php
//conditionals
    $d = date("D");
    echo $d . "<br>";

    if ($d == "Fri") {
        echo "Today is $d, have a nice weekend.<br>";
    }  elseif ($d == "Sun") {
        echo "Today is $d, have a nice Sunday.<br>";
    }  else  {
        echo "Today is $d, have a nice day.<br>";
    }
//ternary operator
    $age = 17;
    echo ($age < 18) ? 'Child' : 'Adult';
    echo "<br>";
//null coalescing operator
    $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
    echo $name . "<br>";
    //is the same as 
    $name = $_GET['name'] ?? 'anonymous';
    echo $name . "<br>";
// Switch Case statements
    $today = date("D");
    switch($today) {
        case "Mon":
            echo "Today is Monday. Clean your house.";
            break; //the break must be added or PHP will go through the whole case tree even when it had found a match.
        case "Tue":
            echo "Today is Tuesday. Buy some food.";
            break;
        case "Wed":
            echo "Today is Wednesday. Visit a doctor.";
            break;
        case "Thu":
            echo "Today is Thursday. Repair your car.";
            break;
        case "Fri":
            echo "Today is Friday. Party tonight.";
            break;
        case "Sat":
            echo "Today is Saturday. Its movie time.";
            break;
        case "Sun":
            echo "Today is Sunday. Do some rest.";
            break;
        default:
            echo "No information available for that day.";
            break;
    }
    
    ?>

</body>
</html>