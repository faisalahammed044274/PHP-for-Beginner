<?php

// 1) Create a Students Array with 3 students
// 2) Provide the details: ID, Name, Age and Class
// 3) Fill up the Array and Display in HTML Page
// 4) Use Table to display the Students details.

$students = [
    "Rahim" => [
        "Id" => 100,
        "Name" => "Rahim",
        "Age" => 16,
        "Class" => "Eight",
    ],
    "Karim" => [
        "Id" => 100,
        "Name" => "Karim",
        "Age" => 18,
        "Class" => "Ten",
    ],
    "Salim" => [
        "Id" => 100,
        "Name" => "Salim",
        "Age" => 17,
        "Class" => "Nine",
    ],
];


foreach($students as $key => $student){
    foreach($student as $s){
        echo $s . PHP_EOL . "<br>";
    }
}


