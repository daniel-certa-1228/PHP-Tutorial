<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 14</title>
</head>
<body>
    <h1><?php echo "Page 14"; ?></h1>
<!-- PHP write to files -->
    <?php
        $file = "note_2.txt";
        $data = "The scar had not pained Harry for nineteen years. All was well.";
        // 'w' overwrites by default.  Use 'a' to append content
        $handle = fopen($file, "w") or die ("ERROR: Cannot open the file.");
        fwrite($handle, $data) or die ("ERROR: Cannot write the file.");
        fclose($handle);

        echo "Data written to the file successfully.<br>";
    ?>

    <?php
        $file = "note_2.txt";
        $data = "The scar had not pained Harry for nineteen years. All was well.";
        //file_out overwrites.  use the FILE_APPEND flag toappend
        file_put_contents($file, $data) or die ("ERROR: Cannot write the file.");

        echo "Data written to the file successfully.<br>";
    ?>

    <?php
        $file = "note_2.txt";
        $data = "  THIS TEXT IS APPENDED.";

        file_put_contents($file, $data, FILE_APPEND) or die ("ERROR: Cannot write the file.");

        echo "Data written to the file successfully.<br>";
    ?>

    <?php
        //renaming files
        $file = "renamed_sev.txt";

        if (file_exists($file)) {

            if(rename($file, "successfully_renamed_sev.txt")) {
                echo "File renamed successfully.";
            }  else  {
                echo "ERROR: File does not exist.";
            }
            
        }  else  {
            echo "ERROR: File does not exist.";
        }
    ?>
    <?php
        $file = "delete_me.txt";

        if (file_exists($file)) {

            if(unlink($file)) {
                echo "File removed successfully";
            }  else  {
                echo "ERROR: File cannot be removed.";
            }

        }  else  {
            echo "ERROR: File does not exist.";
        }
    ?>
    <!--
    fgetc()	Reads a single character at a time.
    fgets()	Reads a single line at a time.
    fgetcsv()	Reads a line of comma-separated values.
    filetype()	Returns the type of the file.
    feof()	Checks whether the end of the file has been reached.
    is_file()	Checks whether the file is a regular file.
    is_dir()	Checks whether the file is a directory.
    is_executable()	Checks whether the file is executable.
    realpath()	Returns canonicalized absolute pathname.
    rmdir()	Removes an empty directory.
    -->
</body>
</html>