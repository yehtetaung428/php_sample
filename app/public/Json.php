<?php
// An associative array
$marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);

echo json_encode($marks);
echo "<br>";

// Assign JSON encoded string to a PHP variable
$json = '{"Peter": 65, "Harry":80, "John": 78, "Clark":90}';

// Decode JSON data to PHP associative array
$arr = json_decode($json, true);

// Access values from the associative array
echo "associative array<br>";
echo $arr["Peter"];
echo $arr["Harry"];
echo $arr["John"];
echo $arr["Clark"];
echo "<br>";
echo "<hr>";

// Decode JSON data to PHP object
$obj = json_decode($json);

// Access values from the returned object
echo "returned object <br>";
echo $obj->Peter;
echo $obj->Harry;
echo $obj->John;
echo $obj->Clark;
echo "<br>";
echo "<hr>";

// Loop through the associative array
foreach($arr as $key=>$value){
    echo $key . "=>" . $value . "<br>";
}

echo "<hr>";

// Decode JSON data to PHP object
$obj1 = json_decode($json);

// Loop through the object
foreach($obj1 as $key=>$value){
    echo $key . "=>" . $value . "<br>";
}
echo "<hr>";

?>