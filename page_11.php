<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 11</title>
</head>
<body>
    <h1><?php echo "Page 11"; ?></h1>

    <?php
    //PHP Math
        //basic operators
        echo 7+3 . "<br>"; // 10
        echo 7-3 . "<br>"; // 4
        echo 7*3 . "<br>"; // 21
        echo 7/3 . "<br>"; // 2.3333333333333
        echo 7%3 . "<br>"; // 1

        //order of operations
        echo 5 + 4 * 10 . "<br>";         // 45
        echo (5 + 4) * 10 . "<br>";       // 90
        echo 5 + 4 * 10 / 2 . "<br>";     // 25
        echo 8 * 10 / 4 - 2 . "<br>";     // 18
        echo 8 * 10 / (4 - 2) . "<br>";   // 40
        echo 8 + 10 / 4 - 2 . "<br>";     // 8.5
        echo (8 + 10) / (4 - 2) . "<br>"; // 9

        //find the asolute value of a number
        echo abs(5) . "<br>"; // 5
        echo abs(-5) . "<br>";  // 5
        echo abs (4.2) . "<br>"; // 4.2
        echo abs(-4.2) . "<br>";  // 4.2

        //round a fractional up or down
        echo ceil(4.2) . "<br>"; //5
        echo ceil(9.99) . "<br>"; //10
        echo ceil(-5.18) . "<br>"; //-5

        echo floor(4.2) . "<br>"; //4
        echo floor(9.99) . "<br>"; //9
        echo floor(-5.18) . "<br>"; //6

        //square root
        echo sqrt(9) . "<br>"; //3
        echo sqrt(25) . "<br>";  //5
        echo sqrt(10) . "<br>"; // 3.1622776601684
        echo sqrt(-16) . "<br>";  //NAN

        //generate random number
        echo rand() . "<br>";
        echo rand() . "<br>";
        //rand with params
        echo rand(1,10) . "<br>";
        echo rand(1,10) . "<br>";
        
        //Convert Decimal Numbers to Binary and Vice Versa
        echo decbin(2) . "<br>"; // 10
        echo decbin(12) . "<br>"; //1100
        echo decbin(100) . "<br>"; //1100100

        echo bindec(10) . "<br>"; // 2
        echo bindec(1100) . "<br>"; // 12
        echo bindec(1100100) . "<br>"; // 100

        //Convert Decimal Numbers to Hexadecimal and Vice Versa
        echo dechex(255) . "<br>";  // ff
        echo dechex(196) . "<br>";  // c4
        echo dechex(0) . "<br>";    // 0
        
        // Convert hexadecimal to decimal
        echo hexdec('ff') . "<br>";  // 255
        echo hexdec('c4') . "<br>";  // 196
        echo hexdec(0) . "<br>";     // 0

        //Convert Decimal Numbers to Octal and Vice Versa

        // Convert decimal to octal 
        echo decoct(12) . "<br>";   //  14
        echo decoct(256) . "<br>";  //  400
        echo decoct(77) . "<br>";   //  115
        
        // Convert octal to decimal
        echo octdec('14') . "<br>";   //  12
        echo octdec('400') . "<br>";  //  256
        echo octdec('115') . "<br>";  //  77

        // Convert decimal to binary
        echo base_convert('12', 10, 2) . "<br>";  // 1100
        // Convert binary to decimal
        echo base_convert('1100', 2, 10) . "<br>";  // 12
        
        // Convert decimal to hexadecimal
        echo base_convert('10889592', 10, 16) . "<br>";  // a62978
        // Convert hexadecimal to decimal
        echo base_convert('a62978', 16, 10) . "<br>";  // 10889592
        
        // Convert decimal to octal
        echo base_convert('82', 10, 8) . "<br>";  // 122
        // Convert octal to decimal
        echo base_convert('122', 8, 10) . "<br>";  //  82
        
    ?>

</body>
</html>