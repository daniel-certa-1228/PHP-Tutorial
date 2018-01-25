<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 10</title>
</head>
<body>
    <h1><?php echo "Page 10"; ?></h1>

    <?php
//User defined functions

    // Defining function
    function whatIsToday() {
        echo "Today is " . date('l', mktime()) . "<br>";
    }
    // calling function
    whatIsToday();

    //functions with paramaeters
    function getSum($num1, $num2) {
        $sum = $num1 + $num2;
        echo "Sum of the two numbers $num1 and $num2 is: $sum.<br>";
    }
    getSum(10,20);

    //function with optional paramter and default value
    function customFont($font, $size=1.5) {
        echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
    }
    customFont("Arial", 2);
    customFont("Times", 3);
    customFont("Courier");

    //returning values from a function
    function sumTwo($num1, $num2) {
        $total = $num1 + $num2;
        return $total;
    }
    echo sumTwo(5,10);
    echo "<br>";

    //a function can't return multiple values
    // BUT a function can return an array
    function divideNums($dividend, $divisor) {
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;
    }
    list($dividend, $divisor, $quotient) = divideNums(10,2);
    echo $dividend . "<br>";
    echo $divisor . "<br>";
    echo $quotient . "<br>";

    //passing arguments to a function by reference
    // this allows the function to modify its arguments
    //the & allows this
    function selfMult(&$number) {
        $number *= $number;
        return $number;
    }
    $mynum = 5;
    echo $mynum . "<br>";

    selfMult($mynum);
    echo $mynum . "<br>";

//PHP variable scope
    function test(){
        $greet = "Hello.";
        echo $greet . "<br>";
    }
    test(); // Outputs: Hello.
    var_dump($greet); // NULL
    echo "<br>";
    //this works the other way as well.  You can't use an outside variable inside a function.

    $greet_2 = "Hey there.";
    function test_2() {
        echo $greet_2;
    }
    test_2(); // no output
    echo $greet_2 . "<br>";

    //There may be a situation when you need to import a variable from the main program into a function, or vice versa. In such cases, you can use the global keyword before the variables inside a function. This keyword turns the variable into a global variable.
    $more_greet = "Another greeting.";
    function more_test(){
        global $more_greet;
        echo $more_greet . "<br>";
    }
    more_test(); //outputs "Another greeting."

//recursive functions/////////////////////////
    function printValues($arr) {
        global $count;
        global $items;
        //check if input is an array
        if (!is_array($arr)){
            die("Error: Input is not an array.");
        }
    //Loop through array, if value is itself an array recursively call the function else add the value found to the output items array, and increment counter by 1 for each value found
        foreach($arr as $a) {
            if (is_array($a)) {
                printValues($a);
            }  else  {
                $items[] = $a;
                $count++;
            }
        }
    // Return total count and values found in array
        return array('total' => $count, 'values' => $items);    
    }
    // Define nested array
    $species = array(
        "birds" => array(
            "Eagle",
            "Parrot",
            "Swan"
        ),
        "mammals" => array(
            "Human",
            "cat" => array(
                "Lion",
                "Tiger",
                "Jaguar"
            ),
            "Elephant",
            "Monkey"
        ),
        "reptiles" => array(
            "snake" => array(
                "Cobra" => array(
                    "King Cobra",
                    "Egyptian cobra"
                ),
                "Viper",
                "Anaconda"
            ),
            "Crocodile",
            "Dinosaur" => array(
                "T-rex",
                "Alamosaurus"
            )
        )
    );
    $result = printValues($species);
    echo $result['total'] . ' values found: ';
    echo implode(', ', $result['values']); // implode : join array elements with a srting

    ?>

    
</body>
</html>