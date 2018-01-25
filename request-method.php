<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP $_REQUEST variable</title>
</head>
<body>
<?php
//PHP provides another superglobal variable $_REQUEST that contains the values of both the $_GET and $_POST variables as well as the values of the $_COOKIE superglobal variable.
if(isset($_REQUEST["name"])){
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>
<!-- unsing htmlspecialchars before $_SERVER["PHP_SELF"] prevents injected code attacks -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>