<?php

/*Multidimensional arrays in PHP

Multi-dimensional arrays are such type of arrays which stores an another array at each index instead of single element. In other words, define multi-dimensional arrays as array of arrays. As the name suggests, every element in this array can be an array and they can also hold other sub-arrays within. Arrays or sub-arrays in multidimensional arrays can be accessed using multiple dimensions.

Dimensions: Dimensions of multidimensional array indicates the number of indices needed to select an element. For a two dimensional array two indices to select an element.

Two dimensional array: It is the simplest form of a multidimensional array. It can be created using nested array. These type of arrays can be used to store any type of elements, but the index is always a number. By default, the index starts with zero.

Syntax:

array (
    array (elements...),
    array (elements...),
    ...
)
*/


// PHP program to create
// multidimensional array

// Creating multidimensional
// array
$myarray = array(
	
	// Default key for each will
	// start from 0
	array("Ankit", "Ram", "Shyam"),
	array("Unnao", "Trichy", "Kanpur")
);
	
// Display the array information
print_r($myarray);


// Two dimensional associative array: Al associative array is similar to indexed
// array but instead of linear storage (indexed storage), every value can be 
// assigned with a user-defined key of string type.


// PHP program to creating two
// dimensional associative array
$marks = array(
	
	// Ankit will act as key
	"Ankit" => array(
		
		// Subject and marks are
		// the key value pair
		"C" => 95,
		"DCO" => 85,
		"FOL" => 74,
	),
		
	// Ram will act as key
	"Ram" => array(
		
		// Subject and marks are
		// the key value pair
		"C" => 78,
		"DCO" => 98,
		"FOL" => 46,
	),
	
	// Anoop will act as key
	"Anoop" => array(
		
		// Subject and marks are
		// the key value pair
		"C" => 88,
		"DCO" => 46,
		"FOL" => 99,
	),
);

echo "Display Marks: \n";
	
print_r($marks);

// Three Dimensional Array: It is the form of multidimensional array.
//  Initialization in Three-Dimensional array is same as that of 
//  Two-dimensional arrays. The difference is as the number of 
//  dimension increases so the number of nested braces will also 
//  increase.

// Syntax:

// array (
//     array (
//         array (elements...),
//         array (elements...),
//         ...
//     ),
//     array (
//         array (elements...),
//         array (elements...),
//         ...
//     ),
//     ...
// )


// PHP program to creating three
// dimensional array

// Create three nested array
$myarray = array(
	array(
		array(1, 2),
		array(3, 4),
	),
	array(
		array(5, 6),
		array(7, 8),
	),
);
	
// Display the array information
print_r($myarray);


?>