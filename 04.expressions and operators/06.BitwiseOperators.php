<?php

// Learn to use Bitwise Operators
/*

& = AND ;
| =  OR;
^ = XOR;
~ = NOT - Works on one operator like ++ and -- Unary Operator


//-----------------------------------------------------------------------

// $a & $b ----	    And             ----	Bits that are set in both $a and $b are set.

// $a | $b ----	    Or              ----    (inclusive or) 	Bits that are set in either $a or $b are set.

// $a ^ $b ----	    Xor             ----    (exclusive or) 	Bits that are set in $a or $b but not both are set. 

// ~ $a 	----    Not 	        ----    Bits that are set in $a are not set, and vice versa. 

// $a << $b ----	Shift left 	    ----    Shift the bits of $a $b steps to the left (each step means "multiply by two") 

// $a >> $b ----	Shift right     ----    Shift the bits of $a $b steps to the right (each step means "divide by two") 

//-----------------------------------------------------------------------


// How Bits Work

// // 0 -> bits -> 0000
// // 1 -> bits -> 0001
// // 2 -> bits -> 0010
// // 3 -> bits -> 0011
// // 4 -> bits -> 0100
// // 5 -> bits -> 0101

// // 1 - 1 = 1;
// // 0 - 0 = 0;
// // 0 - 1 = 0;
// // 1 - 0 = 0;
// */

$first =  0; //0000
$second = 1; //0001

//0000 & 0001 =  (0&0) & (0&0) & (0&0) & (0&1) = 0000

//echo $first & $second ; //result 0

$first = 2; //0010
$second = 3; //0011

//(0010) & (0011) = (0&0) & (0&0) & (1&1) & (0&1) = 0010
// >>> & = AND Operator     ----- True if both $x and $y are true
//echo $first & $second ; //result 2

// & = AND ;
// | =  OR;
// ^ = XOR;
// ~ = NOT - Works on one operator like ++ and -- Unary Operator


// >>> | =  OR Operator     ------ True if either $x or $y is true
// //(0010) | (0011) = (0|0) & (0|0) & (1|1) & (0|1) = 0011
echo $first | $second ; //0 - 1 = 1 
// >>> ^ = XOR;             ----- True if either $x or $y is true, but not both
// //(0010) ^ (0011) = (0^0) & (0^0) & (1^1) & (0^1) = 0001
echo $first ^ $second ; //0 - 1 = 1 and 1 - 1 = 0;



// >>> ~ = NOT (~ or !)       // It's reverse the bits
//----- True if $x is not true 


$first = 2; //0010
$second = 3; //0011

// 0001 = 1110
// 0010 = 1101


echo ~$first ;      // Invert the bits if 0 then 1 or 1 then 0
echo ~$second ;


// Input: number = 5

// Output: The bitwise '~' of this number will be -6.

// Explanation:
// Binary representation of 5 is 0101. Therefore the
// bitwise ~ of this will be 1010 (inverts all the 
// bits of the input number)

?>