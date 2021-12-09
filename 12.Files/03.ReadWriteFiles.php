<?php
//Learn to Read and Write Files

//Open Files
//Read File Content
//Close the File

//File Modes
//r - read mode
//w - write
//a - append

//======================
//Method 1
//======================

//File Name
$fileName = "content.txt";

//Good Practices
if (!file_exists($fileName)) {
    if (!is_file($fileName)) {
        die("File Doesn't Exists");
    }
}

//Read the File
$content = file_get_contents($fileName);

//Print the content of the file
echo "Its from method 1 : " . $content . PHP_EOL;

//================
//    Method 2
//================

//Open a File
$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);

//Read the Files Content

$content = fread($fileHandler, $fileSize);
echo "Its from method 2 : " . $content . PHP_EOL;

//Close the file
fclose($fileHandler);

//Write Operation Method 1
$fileHandler = fopen($fileName, "w") or die("Unable to write the file");

fwrite($fileHandler, "This is a modified Content 1");
fclose($fileHandler);

//Write Operation Method 2
$fileName1 = "NewFile.txt";
file_put_contents($fileName1, "This is the Write Operation 2");
