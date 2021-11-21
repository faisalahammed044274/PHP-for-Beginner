<?php
// How to Split String to Arrays

//String to Array

$students = "Jhon, Parker, Jacob, Jim, Jonathon";
$studentArr = explode(",", $students);
print_r($studentArr);


//Array to String


$studentList = implode(",", $studentArr);
echo $studentList . PHP_EOL;

//Limited no of Array elements

$studentArr = explode(",", $students, 3);
print_r($studentArr);

?>