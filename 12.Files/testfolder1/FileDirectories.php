<?php

// 1) List all Files in a Directory
// 2) Check for Specific Files in a Directory
// 3) Check If the Name is a Directory or File.
// 4) Create Directory
// 5) Copy Files between Directories.

//Sample 1
//scandir
$path = "TestFolder1";
$result = scandir($path);
var_dump($result);
foreach($result as $dir){
    if($dir != "." && $dir != ".."){
        echo $dir . PHP_EOL;
    }
}

// Remove . and ..

$directory = array_diff($result, ['.', '..']);
var_dump($directory);
foreach($directory as $dir){
    echo $dir . PHP_EOL;
}

?>