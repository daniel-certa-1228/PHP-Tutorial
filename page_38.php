<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP File | Page 38</title>
</head>
<body>
    <h1><?php echo "Page 38";?></h1>
    <h2>Updating Database Table Data</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $update = "UPDATE persons SET email='peterparker_new_again@mail.com' WHERE id='1';";

        if(mysqli_query($connection, $update)){
            echo "Records were updated successfully.";
        }  else  {
            echo "ERROR: Could not able to execute $update. " . mysqli_error($connection);
        }

        mysqli_close($connection); 
    ?>
    
</body>
</html>