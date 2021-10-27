<?php

$name = "Faisal , Ahammed";
echo strlen($name) . PHP_EOL . "<br>";

//echo strlen($name1) .PHP_EOL . "<br>";

$name = "";
echo strlen($name) . PHP_EOL . "<br>";

$name = null;
echo strlen($name) . PHP_EOL . "<br>";

$name = "WOW";
if (strlen($name) > 0) {
    echo $name . PHP_EOL;
} else {
    echo "$name is empty" . PHP_EOL;
}



// $name = "WOW";
// if (!empty($name)) {
//     echo $name . PHP_EOL;
// } else {
//     echo "$name is empty" . PHP_EOL;
// }
