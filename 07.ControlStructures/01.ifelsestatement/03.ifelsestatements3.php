<?php

//Sample 3
//if condition statement without braces.

$some_boolean_condition = false;

if ($some_boolean_condition) {
    echo 'This is a True Condition.' . PHP_EOL;
} else {
    echo 'This is a False Condition.' . PHP_EOL;
}

echo "<br>";

//One liner
if ($some_boolean_condition) echo 'This is TRUE Condition'. PHP_EOL; else echo "This is FALSE Condition" . PHP_EOL;

echo "<br>";
//Recommanded Practice
if ($some_boolean_condition)
echo 'This is a True Condition' . PHP_EOL;
else 
echo 'This is a False Condition' . PHP_EOL;
?>
