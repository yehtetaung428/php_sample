<?php
// Include class definition
require "Object_Class/Rectangle.php";

// Create a new object form Rectangle class
$obj = new Rectangle;

// Get the object properties values
echo $obj -> length; // Output: 0
echo "<br>";
echo $obj -> width; // Output: 0
echo "<br>";

// Set object properties values
$obj -> length = 30;
$obj -> width = 20;

// Read the objct properties values again to show the change
echo $obj -> length; // Output: 30
echo "<br>";
echo $obj -> width; // Output: 20

// Call the object methods
echo "<br>Perimeter is  ";
echo $obj -> getPerimeter(); // Output: 100
echo "<br>Rectange is  ";
echo $obj -> getArea(); //Output 600
echo "<br>";
?>