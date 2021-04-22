<?php
$file = "data.txt";

// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file");

    // Reading the entire file
    $content1 = fread($handle, filesize($file));

    // Display the entire file content
    echo "Display the entire file content<br>";
    echo $content1;
    echo "<br><br>";

    // Reading the entire file into a string
    $content2 = file_get_contents($file) or die("ERROR: Cannot open the file.");
        
    // Display the file content 
    echo "Display the file content<br>";
    echo $content2;
    echo "<br><br>";

    // Reading the entire file into an array
    $arr = file($file) or die("ERROR: Cannot open the file.");
    echo "Reading the entire file into an array<br>";
    foreach($arr as $line){
        echo $line;
        echo "<br>";
    }
    echo "<br><br>";
}else{
    echo "ERROR: File does not exist.";
}

$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Open the file for writing
$handle = fopen($file, "w") or die("ERROR: Cannot open the file.");
    
// Write data to the file
fwrite($handle, $data) or die ("ERROR: Cannot write the file.");
    
// Closing the file handle
fclose($handle);
    
echo "Data written to the file successfully.";
echo "<br><br>";

$file = "note2.txt";
    
// String of data to be written
$data = "神奈川県横浜市鶴見区";
    
// Write data to the file
file_put_contents($file, $data) or die("ERROR: Cannot write the file.");
    
echo "Data written to the file successfully.";
echo "<br><br>";
?>