<?php
// The directory path
$dir = "testdir";

// Check the existence of directory
if(!file_exists($dir)){
    // Attempt to create directory
    if(mkdir($dir)){
        echo "Directory created successfully.";
    }else{
        echo "ERROR: Directory could not be created.";
    }
}else{
    echo "ERROR: Directory already exists.";
}

// Copying Files from one location to another
// Source file path
$file = "example.txt";
 
// Destination file path
$newfile = "backup/example.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to copy file
    if(copy($file, $newfile)){
        echo "File copied successfully.";
    } else{
        echo "ERROR: File could not be copied.";
    }
} else{
    echo "ERROR: File does not exist.";
}
echo "<br>";

// List all files in a directory
$mydir = glob("backup/*");

foreach($mydir as $filename){
    if(is_file($filename)){
        echo $filename, "<br>";
    }
}
?>