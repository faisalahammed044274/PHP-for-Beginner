<?php

/*
* true or false / TRUE OR FALSE can be used to assign a boolean variable
*Boolean are literals are case insentive - True or true or TRUE are same.
*True = 1 and false = 0 when displayed with echo
*Integer variable with value 0 is false and anything else is true
*String variable with value "0" is false and anything else is true
*Boolean is used in condition to check something.
*Operators which results into boolean conditions. 
*/

//define and use the boolean variable
$flag1 = TRUE;
$flag2 = FALSE;
echo($flag1) ? "True" : "False";
echo PHP_EOL;
echo($flag2) ? "True" : "False";
echo PHP_EOL;

//Print Boolean Variables
echo "True: " . $flag1 . PHP_EOL; 
echo "True: " . $flag2 . PHP_EOL;

//Use String as Boolean Condition
$isLoggedIn = true;
$userSessionName = "0";
echo ($isLoggedIn && $userSessionName) ? "User Logged In" : "User unable to Logged In";
echo PHP_EOL;

//Use Integer Variable as Boolean - Watchout for Negetive Values

$marks = 0;
echo ($marks) ? "Marks has value" : "Marks does not have value";
echo PHP_EOL;
?>