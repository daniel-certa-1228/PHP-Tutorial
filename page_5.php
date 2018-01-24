<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 5</title>
</head>
<body>
    <h1><?php echo "Page 4"; ?></h1>

    <?php
    // Operators in PHP
        $x = 10;
        $y = 4;
        echo($x + $y);
        echo"<br>";
        echo($x - $y);
        echo"<br>";        
        echo($x * $y);
        echo"<br>";        
        echo($x / $y);
        echo"<br>";
        echo($x % $y);
        echo"<br>";
    //Assignemt operators
        $num_1 = 10;
        echo $num_1;
        echo"<br>";

        $num_2 = 20;
        $num_2 += 30;
        echo $num_2;
        echo"<br>";

        $x = 25;
        $y = 35;
        $z = "25";
        var_dump($x == $z);  // Outputs: boolean true
        echo"<br>";
        var_dump($x === $z); // Outputs: boolean false
        echo"<br>";
        var_dump($x != $y);  // Outputs: boolean true
        echo"<br>";
        var_dump($x !== $z); // Outputs: boolean true
        echo"<br>";
        var_dump($x < $y);   // Outputs: boolean true
        echo"<br>";
        var_dump($x > $y);   // Outputs: boolean false
        echo"<br>";
        var_dump($x <= $y);  // Outputs: boolean true
        echo"<br>";
        var_dump($x >= $y);  // Outputs: boolean false
        echo"<br>";
        
        $num_3 = 10;
        echo ++$num_3; //increment num_3 by 1 and returns num_3
        echo"<br>";        
        echo $num_3;
        echo"<br>";
        
        $num_4 = 10;
        echo $num_4++; //returns num_4 and THEN increments it by 1
        echo"<br>";        
        echo $num_4; 
        echo"<br>";
        
        $num_5 = 10;
        echo --$num_5; //decrement num_5 by one and returns num_5
        echo"<br>";        
        echo $num_5;
        echo"<br>";
        
        $num_6 = 10;
        echo ++$num_6; //returns num 6 and THEN decrements it by one.\
        echo"<br>";        
        echo $num_6;
        echo"<br>";
        
    //PHP Logical Operators
        $year = 2014;
        //Leap years are dividible by 400 or 4 but not by 100
        if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 ==0))) {
            echo "$year is a leap year.<br>";
        }  else  {
            echo "$year is NOT a leap year.<br>";
        }
    
    //String concat
        $s1 = "Hello, ";
        $s2 = "world.";
        echo $s1 . $s2 . "<br>"; //regular concat

        $s1 .= $s2;
        echo $s1;
        echo"<br>";

    // Array operators  
        $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
        $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
        $z = $x + $y; // Union of $x and $y
        var_dump($z);
        echo"<br>";        
        var_dump($x == $y);   // Outputs: boolean false
        echo"<br>";        
        var_dump($x === $y);  // Outputs: boolean false
        echo"<br>";        
        var_dump($x != $y);   // Outputs: boolean true
        echo"<br>";        
        var_dump($x <> $y);   // Outputs: boolean true
        echo"<br>";        
        var_dump($x !== $y);  // Outputs: boolean true
        echo"<br>";        
    //PHP Spaceship operator
    //The spaceship operator returns 0 if both operands are equal, 1 if the left is greater, and -1 if the right is greater. 
        //comparing integers
        echo 1 <=> 1;
        echo"<br>";
        echo 1 <=> 2;
        echo"<br>";
        echo 2 <=> 1;
        echo"<br>";
        //comparing floats
        echo 1.5 <=> 1.5;
        echo"<br>";
        echo 2.5 <=> 1.5;
        echo"<br>";
        echo 1.5 <=> 2.5;
        echo"<br>";
        //comparing strings
        echo "x" <=> "x";
        echo"<br>";
        echo "x" <=> "y";
        echo"<br>";
        echo "y" <=> "x";
        echo"<br>";
        
    ?>
    
</body>
</html>