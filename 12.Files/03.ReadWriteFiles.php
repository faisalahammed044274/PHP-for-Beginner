<?php
//Learn to Read and Write Files


//Open Files
//Read Files
//Close the Files

//File Modes
//r - read mode
//w - write
//a - append

//======================
//Method 1
//======================

//File Name
$fileName = "readwrite.txt";

//Read the file
$content = file_get_contents($fileName);

//Print the Content of the file
echo $content . PHP_EOL; 

//Open a File
$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);

//Read the File Content
$content = fread($fileHandler, $fileSize);
echo $content . PHP_EOL;

//Close the file
fclose($fileHandler);

//Write Operations - Method 1
$fileHandler = fopen($fileName, "w") or die("Unable to Write the file");

fwrite($fileHandler, "This is a modified content");
fclose($fileHandler);

//======================
//Method 2
//======================

?>