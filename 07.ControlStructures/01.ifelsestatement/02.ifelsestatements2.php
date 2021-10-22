<?php

//Sample 2
// Check if the inputs given by user is correct.
// $input1 = "Some text from the user";
$input1 = "Some text from the user";

$input2 = 34;

//Condition 1
if (!is_null($input1)) {
    echo '01. $input1 is not empty';
} else {
    echo '01. $input1 is empty';
}

echo "<br>";

//Condition 2
if (isset($input1) && is_null($input1)) {
    echo '02. $input1 is not empty';
} else {
    echo '02. $input1 is empty';
}

echo "<br>";
//Condition 3
if ($input1 != ""){
    echo '03. $input1 is not empty';
} else {
    echo '03. $input is empty';
}

echo '<br>';

//Best way to check if the field is empty
if (!empty($input1)) {
    echo '$input1 is not empty';
}else {
    echo '$input1 is empty';
}
echo '<br>';
if ($input2 >= 34){
    echo  ' $input2 is grater or equal than 34';
} else {
    echo '$input1 is less than 34';
}