<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 21</title>
</head>
<body>
    <h1><?php echo "Page 22"; ?></h1>
    <p>Only one error block can be uncommented at a time for this demo.</p>
    <?php
    //the 'die' method gives a custom error message and cleanly terminates the current script
    // if(file_exists("not_a_file.txt")){
    //     $file = fopen("not_a_file.txt", "r");
    // }  else  {
    //     die("Error: The file you are trying to access doesn't exist.");
    // }

//custom error handlers
    // error handler function
    // function customError($errno, $errstr){
    //     echo "<b>Error: </b> [$errno] $errstr";
    // }
    // //set error handler
    // set_error_handler("customError");
    // //trigger error
    // echo($test);

//errors can be logged in a text file
    // function calcDivision($dividend, $divisor){
    //     if($divisor == 0){
    //         trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
    //         return false;
    //     } else{
    //         return($dividend / $divisor);
    //     }
    // }
    // function customError($errno, $errstr, $errfile, $errline, $errcontext){
    //     $message = date("Y-m-d H:i:s - ");
    //     $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    //     $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
        
    //     error_log($message, 3, "logs/app_errors.log");
    //     die("There was a problem, please try again.");
    // }
    // set_error_handler("customError");
    // echo calcDivision(10, 0);
    // echo "This will never be printed.";

//errors can be logged as emails
    // function calcDivision($dividend, $divisor){
    //     if ($divisor == 0){
    //         trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
    //         return false;
    //     } else{
    //         return($dividend / $divisor);
    //     }
    // }
    // function customError($errno, $errstr, $errfile, $errline, $errcontext){
    //     $message = date("Y-m-d H:i:s - ");
    //     $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
    //     $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
        
    //     error_log($message, 1, "webmaster@example.com");
    //     die("There was a problem, please try again. Error report submitted to webmaster.");
    // }
    // set_error_handler("customError");
    // echo calcDivision(10, 0);
    // echo "This will never be printed.";

    //TRIGGER ERRORS
    function calcDivision($dividend, $divisor){
        if ($divisor == 0) {
            trigger_error("The divisor cannot be zero", E_USER_WARNING);
            return false;
        }  else  {
            return ($dividend / $divisor);
        }
    }

    echo calcDivision(10,0);

    ?>

</body>
</html>