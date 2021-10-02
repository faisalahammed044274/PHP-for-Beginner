<?php

// // 1) How to use Variable of Variables
// $male = "Setu, Faisal"; //male is a variable
// $gender = "male"; //Gender is holding a variable name

// echo $gender."<br>";
// echo $$gender . "<br>"; // defination $($gender) ==> $(male) || 

// $student = "Setu, Faisal";
// $male = "student";
// $gender = "male";
// echo $$$gender ."<br>";
//  // $$$(gender) = male ==> $($male) = student ==> $(male) = Setu , Faisal || output = Setu, Faisal


$car = "BMW";
$vehicle = "car";
$bmw = "vehicle";
$buy = "bmw"; 

echo $$$$buy;