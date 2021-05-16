<?php
// Accessing an individual cookie value
// echo $_COOKIE["username"];
// echo "<br>";

// Verifying whether a cookie is set or not
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
}else{
    echo "Welcome Guest!";
}
?>