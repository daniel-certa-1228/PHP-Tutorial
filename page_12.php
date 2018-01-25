<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 12</title>
</head>
<body>
    <h1><?php echo "Page 12"; ?></h1>

    <?php
//php DateTime
    $today = date("m/d/Y");
    echo $today . "<br>";
    //capital Y gives the whole year
    //capital D gived the 3 letter day, i.e., Wed
    //captial M gives the 3 letter month, ie, Jan
    echo date("d/m/Y") . "<br>";
    echo date("d-m-Y") . "<br>";
    echo date("d.m.Y") . "<br>";

    echo date("h:i:s") . "<br>";
    echo date("F d, Y h:i:s A") . "<br>";
    echo date("h:i a"). "<br>";
    // F - Full month
    // h - Represent hour in 12-hour format with leading zeros (01 to 12)
    // H - Represent hour in in 24-hour format with leading zeros (00 to 23)
    // i - Represent minutes with leading zeros (00 to 59)
    // s - Represent seconds with leading zeros (00 to 59)
    // a - Represent lowercase ante meridiem and post meridiem (am or pm)
    // A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)  

// PHP Time
    $timestamp = time();
    echo($timestamp). "<br>";
    //convert a timestamp to a human readable date
    $timestamp_2 = 1394003958;
    echo(date("F d, Y h:i:s", $timestamp_2). "<br>");

//The PHP mktime() function
    //creates a timestamp based on a specific date and time.
    //If no date and time is provided, the timestamp for the current date and time is returned.

    //basic syntax: mktime(hour, minute, second, month, day, year)

    echo mktime(15, 20, 12, 5, 10, 2014) . "<br>"; //  1399735212

    //The mktime() function can be used to find the weekday name corresponding to a particular date. To do this, simply use the 'l' (lowercase 'L') character with your timestamp, as in the following example, which displays the day that falls on April 1, 2014:
    echo date('l', mktime(0,0,0,1,4,2014)) . "<br>"; //Saturday

    //future date
    $futureDate = mktime(0,0,0,date("m")+30,date("d"),date("Y"));
    echo date("d/m/Y", $futureDate);
    var_dump($futureDate) . "<br>";
    ?>


    
</body>
</html>