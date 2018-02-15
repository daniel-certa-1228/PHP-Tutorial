<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP File | Page 39</title>
</head>
<body>
    <h1><?php echo "Page 39";?></h1>
    <h2>Deleting Database Table Data</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $delete = "DELETE FROM persons WHERE first_name='Neville';";

        if(mysqli_query($connection, $delete)){
            echo "Records were deleted successfully.";
        }  else  {
            echo "ERROR: Could not able to execute $delete. " . mysqli_error($connection);
        }

        mysqli_close($connection);   
    ?>

</body>
</html>