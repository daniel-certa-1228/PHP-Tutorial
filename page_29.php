<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 29</title>
</head>
<body>
    <h1><?php echo "Page 29"; ?></h1>
    <h2>Creating a MySQL db ("tutorial_2")</h2>
    
    <?php
    //attempt connection to MySQL database
        $connection = new mysqli("127.0.0.1", "root", "password", "");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $new_db = "CREATE DATABASE tutorial_2";
        if(mysqli_query($connection, $new_db)){
            echo "Database created successfully<br>";
        }  else  {
            echo "ERROR: Was not able to execute $new_db. <br>" . mysqli_error($connection) . "<br>";
        }

        mysqli_close($connection);
    ?>
</body>
</html>