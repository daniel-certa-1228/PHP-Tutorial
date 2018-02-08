<?php namespace MyNamespace; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 23</title>
</head>
<body>
    <h1><?php echo "Page 24"; ?></h1>
    <h2>Magic Constants</h2>

    <?php
        echo "Line number " . __LINE__ . ".<br>";
        echo "Line number " . __LINE__ . ".<br>";
        echo "Line number " . __LINE__ . ".<br>";

        echo "The full path of this file is: " . __FILE__ . "<br>";

        echo "The directory of this file if: " . __DIR__ . "<br>";

        function myFunction(){
            echo "The function name is " . __FUNCTION__ . ".<br>";
        }
        myFunction();

        class MyClass
        {
            public function getClassName(){
                return __CLASS__;
            }
        }
        $obj = new MyClass;
        echo $obj->getClassName(); echo "<br>";

        class Sample
        {
            public function myMethod(){
                echo __METHOD__;
            }
        }
        $obj_2 = new Sample;
        $obj_2->myMethod(); echo "<br>";
    ?>

    <?php
    class MyClass_2
    {
        public function getNamespace(){
            return __NAMESPACE__;
        }
    }
    $obj_3 = new MyClass_2;
    echo $obj_3->getNamespace();
    ?>
    
</body>
</html>