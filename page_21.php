<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 19</title>
</head>
<body>
    <h1><?php echo "Page 21"; ?></h1>
    <?php
    //filter_var(variable, filter, options)
    $comment = "<h1>Hello, dingus.  Welcome to Butte, Montanna.</h1>";
    $sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
    echo $sanitizedComment . "<br>";

    //validate integer
    $int = 20;
    if(filter_var($int, FILTER_VALIDATE_INT)){
        echo "<b>$int</b> is a valid integer<br>";
    }  else  {
        echo "<b>$int</b> is not a valid integer<br>";
    }

    //PHP will inherently treat 0 as an invalid integer, so you need to explicitly define it as valid
    $int_2 = 0;
    if( (filter_var($int_2, FILTER_VALIDATE_INT) === 0) || (filter_var($int_2, FILTER_VALIDATE_INT)) ) {
        echo "<b>$int_2</b> is a valid integer<br>";
    }  else  {
        echo "<b>$int_2</b> is not a valid integer<br>";
    }

    //validate IP addresses
    $ip = "172.16.254.1";
    if(filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "<b>$ip</b> is a valid IP address.<br>";
    }  else  {
        echo "<b>$ip</b> is NOT a valid IP address.<br>";
    }

    //validate for IPV4 or IPV6 addresses
    $ip = "172.16.254.1";
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        echo "The <b>$ip</b> is a valid IPV6 address.<br>";
    }  else  {
        echo "The <b>$ip</b> is NOT a valid IPV6 address.<br>";
    }

    //sanitize and validate Email addresses
    $email = "someone@@example.com";
    //remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<b>$email</b> is a valid email address<br>";
    }  else  {
        echo "<b>$email</b> is a NOT a valid email address<br>";
        
    }

    //sanitize and validate a url
    $url = "http:://www.example.com";
    // Remove all illegal characters from url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "<b>$url</b> is a valid website url<br>";
    }  else  {
        echo "<b>$url</b> is NOT a valid website url<br>";
    }

    $url = "http://www.example.com?topic=filters";
 
    // Validate website url for query string
    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
        echo "<b>$url</b> contains query string<br>";
    } else {
        echo "<b>$url</b> does not contain query string<br>";
    }

    // Sample integer value
    $int = 75;
 
    // Validate sample integer value
    if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0,"max_range" => 100)))){
        echo "<b>$int</b> is within the range of 0 to 100<br>";
    } else {
        echo "<b>$int</b> is not within the range of 0 to 100<br>";
    }

    ?>
    

</body>
</html>