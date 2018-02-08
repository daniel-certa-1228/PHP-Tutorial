<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Test</title>
</head>
<body>
    <h1>Class Test</h1>
    <h2>References page_23.php</h2>

    <?php
        require "page_23.php";
        // create a new object from Rectangle class
        $obj = new Rectangle;

        //get the pbject property values
        echo $obj->length . "<br>";
        echo $obj->width . "<br>";

        //set the pbject property values
        $obj->length = 30;
        $obj->width = 20;

        // read the object properties values again to show the change
        echo $obj->length . "<br>";
        echo $obj->width . "<br>";

        //call the object methods
        echo $obj->getPerimeter() . "<br>";
        echo $obj->getArea() . "<br>";

        //////////////////////////////////////

        $obj1 = new Rectangle;
        $obj2 = new Rectangle;

        echo $obj1->getArea() . "<br>";
        echo $obj2->getArea() . "<br>";

        $obj1->length = 40;
        $obj1->width = 20;

        $obj2->length = 35;
        $obj2->width = 50;

        echo $obj1->getArea() . "<br>";
        echo $obj2->getArea() . "<br>";

        //////////////////////////////////////
        
    ?>
</body>
</html>