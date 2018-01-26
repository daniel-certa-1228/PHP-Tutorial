<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 13</title>
</head>
<body>
    <h1><?php echo "Page 13"; ?></h1>
<!-- PHP Opening and reading files. -->
    <?php
        $file = "note.txt";
        if (file_exists($file)) {
            $handle = fopen($file, 'r') or die("ERROR: Cannot open file.");
            //first parameter is the stream, the second is the number of characters to read.  This will read all of them but the number can be fixed.
            $content = fread($handle, filesize($file));

            fclose($handle);

            echo $content . "<br>";

        }  else  {
            echo "ERROR: File does not exist.";
        }
    ?>

    <?php
        //'readfile' does this without opening it.  If you don't need to write this works great.
        $file = "note.txt";
        
        if (file_exists($file)) {

            readfile($file) or die("ERROR: Cannot open file.");

            echo "<br>";

        }  else  {
            echo "ERROR: File does not exist.";
        }
        
    ?>

    <?php
        $file = "note.txt";

        if(file_exists($file)) {

            $content = file_get_contents($file) or die ("ERROR: Cannot open the file.");

            echo $content . "<br>";

        } else  {
            echo "ERROR: File does not exist.";
        }
    ?>

    <?php
        $file = "note.txt";
        //PHP file() takes each line of a file and puts it an array/
        if(file_exists($file)) {

            $arr = file($file) or die("ERROR: Cannot open the file.");

            foreach($arr as $line) {
                echo $line . "<br>";
            }

        }  else  {
            echo "ERROR: File does not exist.";
        } 
    ?>

</body>
</html>