<?php
//Understand how to define and work with Strings Data Type.

/*
* Strings are defined in Double quotes and Single Quotes.
*Double Quotes string will interpolate variables value and
single quotes doesnot.
*No limited to how much string variable holds but limited
with system memory.
* Use Escape Character to escape double quotes inside double
quotes and other characters.
*String methods are available to work with string manipulation.
*/

// Define String and Use String
$name1 = "Faisal, Ahammed";
$name2 = "Faisal, Setu";

echo "$name1 and $name2" . PHP_EOL;
echo "$name2 and $name1" . PHP_EOL;

//Combine String
$name3 = $name1 . " - " . $name2;
echo $name3 . PHP_EOL;

//Use Back Slack to escape the characters
$name4 = "This is a \"Special\" String";
echo $name4 . PHP_EOL;

$name4 = "\t \t This is a \"Special\" String";
echo $name4 . PHP_EOL;

$name4 = "\T\h\i\s is a \"Special\" String";
echo $name4 . PHP_EOL;

$name4 = '\T\h\i\s is a \"Special\" String';
echo $name4 . PHP_EOL;

//Print length of the string
//https://www.php.net/manual/en/function.strlen.php
echo strlen($name4) . PHP_EOL;




?>