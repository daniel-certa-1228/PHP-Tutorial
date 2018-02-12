<?php

    $connection = new mysqli("127.0.0.1", "root", "password", "tutorial_2");

    if($connection === false){
        die ("Error: Could not connect ." . mysqli_connect_error() . "<br>");
    }  else  {
        echo "Connected successfully. Host info: " . mysqli_get_host_info($connection) . "<br>";
    }

    $first_name = mysqli_real_escape_string($connection, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_REQUEST['last_name']);
    $email = mysqli_real_escape_string($connection, $_REQUEST['email']);

    $insert = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

    if(mysqli_query($connection, $insert)){
        echo "Records added successfully.";
    }  else  {
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }

    mysqli_close($connection);

?>