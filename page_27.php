<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 27</title>
</head>
<body>
    <h1><?php echo "Page 27"; ?></h1>
    <h2>Exception Handling</h2>

    <?php
    function division($dividend, $divisor){
        if($divisor == 0){
            throw new Exception('Division by zero.');
        }  else  {
            $quotient = $dividend/$divisor;
            echo "$dividend / $divisor = $quotient<br>";
        }
    }

    try{
        division(10,2);
        division(30,-4);
        division(15,0);
        // If exception is thrown following line won't execute
        echo "All divisions performed successfully.<br>"; 
    }  catch(Exception $e)  {
        // Handle the exception
        echo "Caught exception: " . $e->getMessage() . "<br>";
    }
    // Continue execution
    echo "Hello World!<br>";
    ?>

    <?php
        //turn off error reporting
        error_reporting(0);

        try{
            $file = "somefile.txt";

            $handle =fopen($file, "r");
            if(!$handle){
                throw new Exception("Cannot open the file!", 5);
            }

            $content = fread($handle, filesize($file));
            if(!$content){
                throw new Exception("Could not read file", 10);
            }

            fclose($handle);

            echo $content . "<br>";
        }  catch(Exception $e)  {
            echo "<h3>Caught Exception!</h3>";
            echo "Error message: " . $e->getMessage() . "<br>";    
            echo "File: " . $e->getFile() . "<br>";
            echo "Line: " . $e->getLine() . "<br>";
            echo "Error code: " . $e->getCode() . "<br>";
            echo "Trace: " . $e->getTraceAsString() . "<br>";
        }
    ?>
<!-- Defining Custom Exceptions -->
    <?php
    echo "<br>";
    // extends the Exception class
    class EmptyEmailException extends Exception {}
    class InvalidEmailException extends Exception {}
        
    $email = "someuser@example..com";

    try{
        // Throw exception if email is empty
        if($email == ""){
            throw new EmptyEmailException("Please enter your email address.<br>");
        }
        // Throw exception if email is not valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            throw new InvalidEmailException("<b>$email</b> is not a valid E-mail address!<br>");
        }
        //display success message if email is valid
        echo "SUCCESS: Email validation successful.<br>";
    }  catch(EmptyEmailException $e){
        echo $e->getMessage() . "<br>";
    }  catch(InvalidEmailException $e){
        echo $e->getMessage() . "<br>";
    }
    ?>
<!-- Setting a Global Exception Handler -->
<?php
    function handleUncaughtException($e){
        //display generic error message
        echo "Opps! Something went wrong. Please try again, or contact us if the problem persists.<br>";
        //construct the error string
        $error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
        $error .= $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine() . "\n";
        //log error in a file
        error_log($error, 3, "logs/app_errors.log");
        var_dump($error);
    }
    //register custom exception handler
    set_exception_handler("handleUncaughtException");
    //throw an exception
    throw new Exception("Testing exception.");
?>
    
</body>
</html>