<?php
/*
Learn to use the following String Functions
- Number of Words
- Replace Strings
- Reverse Strings
- Remove White Spaces
- Shuffle Strings
- Find Position case insenstive.
- Upper and Lowercase
- Word Wrap the String and display it.
 */

$content = "You can do string oprations easily with functions";
$findWord = "operations";
$position = false;

echo "$content" . PHP_EOL . "<br>";
//Number of words
echo "Number of words in the string : " . str_word_count($content) . PHP_EOL . "<br>";

//Replace Strings
echo "Find and Replace operations with manipulation : " . str_replace("oprations", "manipulations", $content) . PHP_EOL . "<br>";

//Reverse Strings
echo strrev($content) . PHP_EOL . "<br>";

//Shuffle Strings
echo str_shuffle($content) . PHP_EOL . "<br>";

//Find Position case insenstive
echo strpos($content, "OPERATIONS") . PHP_EOL;

//UPPERCASE AND LOWERCASE

echo strtoupper($content) . PHP_EOL . "<br>";
echo strtolower($content) . PHP_EOL . "<br>";

//Word Wrap of String

$content = "            PHP is a general-purpose scripting language geared
 towards web development. It was originally created by
 Danish-Canadian programmer Rasmus Lerdorf in 1994.
 The PHP reference implementation is now              produced by
 The PHP Group.";

 echo trim($content) . PHP_EOL . "<br>";
 echo wordwrap($content, 40) . PHP_EOL . "<br>";
 echo trim($content) . PHP_EOL . "<br>";
