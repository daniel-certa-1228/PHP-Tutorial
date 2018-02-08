<?php
    class Automobile
    {
        public function __construct(){
            echo 'The class "' . __CLASS__  . '"was initiated.<br>';
        }
        
        public $fuel;
        protected $engine;
        private $transmission;
    }

    class Car extends Automobile
    {
        public function __construct(){
            echo 'The class "' . __CLASS__  . '"was initiated.<br>';
        }
    }

    $auto = new Automobile;
    // Attempt to set $automobile object properties
    $auto->fuel = 'Petrol'; // ok
    // $auto->engine = '1500 cc'; // fatal error
    // $auto->transmission = 'Manual'; // fatal error
    
    // Create an object from Car class
    $car = new Car;
    
    // Attempt to set $car object properties
    $car->fuel = 'Diesel'; // ok
    // $car->engine = '2200 cc'; // fatal error
    $car->transmission = 'Automatic'; // undefined

    //////////////////////////////////////////////
    class HelloClass
    {
        //declare a static property
        public static $greeting = "Hello, world.<br>";
        //declare a static method
        public static function sayHello(){
            echo self::$greeting;
        }
    }
    echo HelloClass::$greeting;//Hello, world.
    HelloClass::sayHello();//Hello, world.

    $hello = new HelloClass;
    var_dump($hello); echo "<br>";
    echo $hello->greeting;// no output
    $hello->sayHello();//Hello, world.
    
?>