<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 32</title>
</head>
<body>
    <h1><?php echo "Page 32"; ?></h1>
    <h2>Prepared Statements</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $insert = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?);";

        if($stmt = mysqli_prepare($connection, $insert)){
            //bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
            /* Set the parameters values and execute
            the statement again to insert another row */
            $first_name = "Hermione";
            $last_name = "Granger";
            $email = "hermionegranger@mail.com";
            mysqli_stmt_execute($stmt);
            
            /* Set the parameters values and execute
            the statement to insert a row */
            $first_name = "Ron";
            $last_name = "Weasley";
            $email = "ronweasley@mail.com";
            mysqli_stmt_execute($stmt);
            
            echo "Records inserted successfully.";
            }  else  {
                echo "ERROR: Could not prepare query: $insert. " . mysqli_error($connection);
            }
        // Close statement
        mysqli_stmt_close($stmt);
        // Close connection
        mysqli_close($connection);
    ?>
    
</body>
</html>