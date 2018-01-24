<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 3</title>
</head>
<body>
    <h1><?php echo "Page 3"; ?></h1>

    <?php
    //PHP Objects
        //php class
        class greeting {
            //property
            public $str = "Hello, world.";
            //methods
            function show_greeting() {
                return $this->str;
            }
        }
        //create object from class
        $message = new greeting;
        var_dump($message);
        echo "<br>";
        //calling an object method
        print $message->show_greeting();
        echo "<br>";
        
    //PHP NULL
        $n1 = NULL;
        var_dump($n1);
        echo "<br>";

        $n2 = "Hello, world.";
        $n2 = NULL;
        var_dump($n2);
        echo "<br>";
    // PHP Resources
    // A resource is a special variable, holding a reference to an external resource
    //Resource variables typically hold special handlers to opened files and database connections.
    $handle = fopen("note.txt", "r")
              or die ("Unable to open file.");
    var_dump($handle);
    echo "<br>";    
    echo fread($handle,filesize("note.txt"));
    echo "<br>";
    fclose($handle);
    
    
        
        
        

        

        

    ?>

    
</body>
</html>