<?php

//Sample 2
// Check if the inputs given by user is correct.
// $input1 = "Some text from the user";
$input1 = null;

$input2 = 34;

//Condition 1
if (!is_null($input1)) {
    echo '$input1 is not empty';
} else {
    echo '$input1 is empty';
}

echo "<br>";

//Condition 2
if (isset($input1) && !is_null($input1)) {
    echo '$input1 is not empty';
} else {
    echo '$input1 is empty';
}

echo "<br>";
//Condition 3
if ($input != ""){
    echo '$input1 is not empty';
} else {
    echo '$input is empty';
}

//Best way to check if the field is empty
if (!empty($input1)) {
    echo '$input1 is not empty';
}else {
    echo '$input1 is empty';
}