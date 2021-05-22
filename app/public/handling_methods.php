<?php
// Turn off default error reporting
error_reporting(0);

try{
    $file = "somefile.txt";

    // Attempt to open the file
    $handle = fopen($file, "r");
    if(!$handle){
        throw new Exception("Cannot open the file!", 5);
    }

    // Attempt to read the file contents
    $content = fread($handle, filesize($file));
    if(!$content){
        throw new Exception("Could not read file!", 10);
    }

    // Closing the file handle
    fclose($handle);

    // Display file contents
    echo $content;
}catch(Exception $e){
    echo "<h3>Caught Exception!</h3>";
    echo "<p>Erro message: " . $e -> getMessage() . "</p>";
    echo "<p>File: " . $e -> getFile() . "</p>";
    echo "<p>Line: " .$e -> getLine() . "</p>";
    echo "<p>Error code: " .$e -> getCode() . "</p>";
    echo "<p>Trace: " . $e -> getTraceAsString() . "</p>";
}
?>