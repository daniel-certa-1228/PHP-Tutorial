<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Test 2</title>
</head>
<body>
    <h1>Class Test</h1>
    <h2>References page_23.php</h2>

    <?php
    require "page_23.php";

    class Square extends Rectangle
    {
        //method to test if the rectangle is also a square
        public function isSquare(){
            if($this->length==$this->width){
                return true;
            }  else  {
                return false;
            }
        }
    }
    //create a new instance of square
    $obj = new Square;
    // set object property values
    $obj->length = 20;
    $obj->width = 20;
    //call the object methods
    if ($obj->isSquare()){
        echo "The area of the square is ";
    }  else  {
        echo "The area of the rectangle is ";
    }
    echo $obj->getArea() . ".<br>";

    ?>
    
</body>
</html>