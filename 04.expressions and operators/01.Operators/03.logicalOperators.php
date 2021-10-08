<?php

/*
AND - both should be true
OR - any one can be true
&& - both should be true
|| - any one can be true
! - if not 
*/

//------------------------------------------
//Sample 1
// "1) Greet Hello, Name if the user is logged in and has permission";
//true true it's true
//------------------------------------------
$permission = true;
$loggedin = true;
$user = "Setu, Faisal";
echo ($permission and $loggedin) ? "Hello, $user" : "Hello, Guest" . PHP_EOL;
echo "<br>";
//------------------------------------------
// "2) Check if student passed any one exam";
//------------------------------------------
$student ="Faisal";
$mathpassed = "true";
$sciencepassed ="true";
//
echo ($mathpassed or $sciencepassed) ? "$student has passed" : "$student was not passed";
//--------------------------------------------------
// 3) Find the difference between and &&
//Operator precedence
// && operator is more precidence that's its true.
//--------------------------------------------------
echo "<br>";
$result1  = true && False;
$result2  = true and False;
echo PHP_EOL;
echo ($result1) ? "True" : "False";
echo PHP_EOL;
echo "<br>";
echo ($result2) ? "True" : "False";
echo PHP_EOL;
//------------------------------------------
// 4) Find the difference between or ||
//------------------------------------------

$result = True || false;
$result = false or True;







//-----------------------------------------------------------
// 5) Check if student is not passed and print the results
//-----------------------------------------------------------
?>