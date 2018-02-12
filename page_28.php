<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 28</title>
</head>
<body>
    <h1><?php echo "Page 28"; ?></h1>
    <h2>MySQL</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error());
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection);
        }
        mysqli_close($connection);
    ?>
    
</body>
</html>