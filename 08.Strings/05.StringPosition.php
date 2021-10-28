<?php

// Find the String position inside the String.

$content = "This is a very long content and it's a string";
$FindContentWord = "content";
$position = strpos($content, $FindContentWord); //sensitive content 
//$position = stripos($content, $FindContentWord); //insensitive content
echo $position . PHP_EOL;

$findContentWord = ("content1");
$position = stripos($content,$findContentWord);
echo $position . PHP_EOL;
echo true . PHP_EOL;
echo false . PHP_EOL;
echo true . PHP_EOL;

//This is right way to compare the position
if($position === false){
    echo "1. Not found !" . PHP_EOL;
}

//In this string position 0 is not false means blank or your assigned content;

$findContentWord = ("a");
$position = stripos($content,$findContentWord);
echo $position . PHP_EOL;

// if (!$position){
//     echo "$position value" . PHP_EOL;
//     echo "2. Not found !" . PHP_EOL;

// }
if (!0){
    echo "false condition" . PHP_EOL;
}

if ($position === false){
    echo "3. Not found." . PHP_EOL;
}
?>