<?php
// Learn how to iterate array elements using foreach loop

/*
foreach($array as $value) {
    //Code to be executed
}
*/

$arr = ["Mon", "Tues", "Wed", "Thurs", "Friday", "Sat", "Sun"];

var_dump ($arr);

$counter = 0;
foreach ($arr as $values) {
    echo $values . PHP_EOL;
}
echo PHP_EOL . "<br>";
$counter1 = 0;
foreach ($arr as $values) {
    echo "[$counter1] => $values" . PHP_EOL;

    $counter1++;
}

?>