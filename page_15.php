<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 15</title>
</head>
<body>
    <h1><?php echo "Page 15"; ?></h1>

    <?php
    //create a directory
        $dir = "test_dir";
        // check to see if directory exists
        if(!file_exists($dir)) {
            // try to create a directory
            if (mkdir($dir)) {
                echo "Directory created!<br>";
            }  else  {
                echo "ERROR: Directory could not be created.<br>";
            }
        }  else  {
            echo "ERROR: Directory already exists.<br>";
        }

    //copy a file
        $file = "note.txt";
        $newfile = "test_dir/note.txt";
        //check that $file exists
        if (file_exists($file)) {
            // tryto copy the file
            if (copy($file, $newfile)) {
                echo "File copied successfully!<br>";
            }  else  {
                echo "ERROR: File could not be copied.<br>";
            }
        }  else  {
            echo "ERROR: File does not exist.<br>";
        }

    //listing all files in a directory
    function outputFiles($path) {
        // check if directories exist
        if(file_exists($path) && is_dir($path)){
            //scan the files in the dir
            $result = scandir($path);
            // var_dump($result);// array(4) { [0]=> string(1) "." [1]=> string(2) ".." [2]=> string(7) "new_dir" [3]=> string(8) "note.txt" }
            // echo "<br>";
            // Filter out the current (.) and parent (..) directories
            $files = array_diff($result, array('.', '..'));
            // var_dump($files);
            // echo "<br>";            
            if(count($files) > 0 ) {
                //loop thru the returned array
                foreach($files as $file) {
                    if(is_file("$path/$file")) {
                        echo $file . "<br>";
                    }  else if(is_dir("$path/$file")) {
                        outputFiles("$path/$file");
                        //recursively call the function if a dir is found
                    }
                }
            }  else  {
                echo "ERROR: No files found in the directory.";
            }
        }  else  {
            echo "ERROR: The directory does not exist.";
        }
    }
    //call the function
    outputFiles("test_dir");

//Listing All Files of a Certain Type
    foreach(glob("test_dir/*.txt") as $file) {
        echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>"; //note.txt (size: 270 bytes)
    }

    //recursive find files by type
    function globOutput($path) {
        //check if directory exists
        if(file_exists($path) && is_dir($path)) {
            // search the files in this directory
            $files = glob($path . "/*");
            if(count($files) > 0) {
                //loop thru array
                foreach($files as $file) {
                    if(is_file($file)) {
                        // display only the filename
                        echo basename($file) . "<br>";
                    }  else if (is_dir($file)) {
                        //recursively call the function if a dir is found                        
                        globOutput($file);
                    }
                }
            }  else  {
                echo "ERROR: No such file found in the directory.";
            }
        }  else  {
            echo "ERROR: The directory does not exist.";
        }
    }
    //call the function
    globOutput("test_dir");
    ?>

</body>
</html>