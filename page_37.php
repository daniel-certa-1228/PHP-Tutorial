<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP File | Page 36</title>
</head>
<body>
    <h1><?php echo "Page 37"; ?></h1>
    <h2>Ordering the Result Set</h2>

    <?php
        $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

        if($connection === false){
            die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
        }  else  {
            echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
        }

        $select = "SELECT * FROM persons ORDER BY first_name;";
        if($result = mysqli_query($connection, $select)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                    echo "<tr>";
                        echo "<th>id</th>";
                        echo "<th>first_name</th>";
                        echo "<th>last_name</th>";
                        echo "<th>email</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "<table>";
                //free the result memory
                mysqli_free_result($result) ;               
            }  else  {
                echo "No records matching your query were found.";
            }
        }  else  {
            echo "ERROR: Could not able to execute $select. " . mysqli_error($connection);
        }

        mysqli_close($connection); 
    ?>
    
</body>
</html>