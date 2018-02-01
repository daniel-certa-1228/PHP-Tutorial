<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 16</title>
</head>
<body>
    <h1><?php echo "Page 16"; ?></h1>
    <h2>File Upload Form</h2>

    <form action="upload-manager.php" method="post" enctype="multipart/form-data">
        <h3>Upload File</h3>
        <label for="fileSelect">Filename:</label><br><br>
        <input type="file" name="photo" id="fileSelect"><br><br>
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>

    <?php

    ?>
    
</body>
</html>