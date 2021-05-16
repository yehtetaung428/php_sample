<?php
if(file_exists("sample.txt")){
    $file = fopen("sample.txt", "r");
    echo "Hello";
}else{
    die("Error: The file you are trying to access doesn't exist.");
}
?>