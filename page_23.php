<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 22</title>
</head>
<body>
    <h1><?php echo "Page 23"; ?></h1>
    <h2>Classes & Objects</h2>

    <?php
        class Rectangle
        {
            //Declare properties
            public $length = 0;
            public $width = 0;

            //method to get the perimeter
            public function getPerimeter(){
                return (2 * ($this->length + $this->width));
            }
            //method to get the area
            public function getArea(){
                return ($this->length * $this->width);
            }
        }

    ?>

    
</body>
</html>