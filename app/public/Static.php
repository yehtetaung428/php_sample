<?php
// Class definition
class HelloClass{
    
    // Declare a static property
    public static $greeting = "Hello Wrold!";

    // Declare a static method
    public static function sayHello(){
        echo self::$greeting;
    }
}

// Attempt to access static property and method directly
echo HelloClass::$greeting;
HelloClass::sayHello();

// Attempt to access static propety and method via object
$hello = new HelloClass;
echo $hello -> greeting;

$hello -> sayHello();
?>