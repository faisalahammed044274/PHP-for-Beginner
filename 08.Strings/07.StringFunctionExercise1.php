<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>

<?php
    $content = "You can do string operations easily with string functions";
    $findWord = "Operations";
    $position = false;

    $position = stripos($content, $findWord);
    if ($position !== false){
        echo "$findWord has been found!" . PHP_EOL;
    }else{
        echo "$findWord has not found!" . PHP_EOL;
    }
?>
<h2>Calculate the Length of the String</h2>
<?=
    strlen($content);
?>
<h2>Remove White Spaces from left in the String</h2>
<?=
ltrim($content);
rtrim($content);
?>
<h2>Reverse the String</h2>

<?= strrev($content) ?>


</body>
</html>



