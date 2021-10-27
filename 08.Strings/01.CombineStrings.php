<?php
// it's called Concate

$firstName = "Faisal";
$secondName = "Ahammed";
$fullName = $firstName ." ". $secondName;
echo $fullName . PHP_EOL;

$Marks = 100;
$passed = true;
echo "<br>";
$content = "Student : $fullName got Total :" . $Marks . " marks and he is passed - " . $passed;
echo $content;