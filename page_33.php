<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 33</title>
</head>
<body>
    <h1><?php echo "Page 33"; ?></h1>
    <h2>Get the ID of Last Inserted Row</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $insert = "INSERT INTO persons (first_name, last_name, email) VALUES ('Neville', 'Longbottom', 'neville@mail.com');";

        if(mysqli_query($connection, $insert)){
            //obtain the last inserted id
            $last_id = mysqli_insert_id($connection);
            echo "Records inserted successfully. Last inserted ID is: " . $last_id;
        }  else  {
            echo "ERROR: Could not able to execute $insertsql. " . mysqli_error($connection);
        }

        mysqli_close($connection);        
    ?>
    
</body>
</html>