<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 30</title>
</head>
<body>
    <h1><?php echo "Page 30"; ?></h1>
    <h2>Creating a TABLE in MySQL db ("tutorial_2")</h2>
    
    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $new_table = "CREATE TABLE persons(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE
        );";

        if(mysqli_query($connection, $new_table)){
            echo "Table created successfully.<br>";
        }  else  {
            echo "ERROR: Could not able to execute $new_table. " . mysqli_error($connection) . "<br>";
        }

        mysqli_close($connection);
    ?>
    
</body>
</html>