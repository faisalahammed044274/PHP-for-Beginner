<?php

// Understand how to define and work with Double or Float.

/*
*Decimals are real numbers
*Decimals have decimal points
*Use round() method with precision
*/

//Define and Print Decimal Variables
$totalScore = 78.87;
echo $totalScore . PHP_EOL;

//Negetive Decimals
$temperature = -40.23;
echo $temperature . PHP_EOL;

//Round a Double Value
$price = 4.99;
echo round($price) . PHP_EOL;

//Compare two Double with Precision 0.1 = 1.87 ~ 1.97
$price =1.87;
$bid = 1.97;
echo (abs($price - $bid) < 0.1) ? "Accepted" : "Rejected";
?>