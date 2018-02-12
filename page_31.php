<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 31</title>
</head>
<body>
    <h1><?php echo "Page 31"; ?></h1>
    <h2>Inserting Data into a MySQL Database Table</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $insert = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter','Parker', 'peterparker@mail.com');";
        if(mysqli_query($connection, $insert)){
            echo "Records inserted successfully.";
        }  else  {
            echo "ERROR: Was not able to execute $insert. " . mysqli_error($connection);
        }

        mysqli_close($connection);
    ?>

</body>
</html>