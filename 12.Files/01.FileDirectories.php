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
foreach ($result as $dir) {
    if ($dir != "." && $dir != "..") {
        echo $dir . PHP_EOL;
    }
}

// Remove . and ..

$directory = array_diff($result, ['.', '..']);
var_dump($directory);
foreach ($directory as $dir) {
    echo $dir . PHP_EOL;
}

//Sample 2 and
//2 - Check for specific Files in a directory.
//3 - Check if the Name is a Directory or File.
//is_file or is_dir

$result = scandir($path);
$result = array_diff($result, ['.', '..']);
foreach ($result as $dir) {
    if (is_dir($path . "/" . $dir)) {
        echo $dir . PHP_EOL;
    }
}

//Create a Directory
$result = glob("*.php");
var_dump($result);

if(!file_exists("TestFolder4")){
    mkdir("TestFolder4");
}

//Copy Files
// copy("foo/test.php",
// "bar/test5.php");

copy("TestFolder1/dummy.txt",
"TestFolder4/dummy5.txt");


?>