<?php
//Define and Read Two Types of Arrays

// 1) Define Indexed Array and Associative Array.
// 2) Use Employee Details as Array
// 3) Display using foreach

// indexed array
$employee = [100, 101, 102, 103]; 
foreach ($employee as $emp) {
    echo "Employee ID : $emp" . PHP_EOL . "<br>";
}


$emp_details = [ 
    "100" =>
    [
        "Name" => "Jhon",
        "Job" => "PHP Developer",
    ],

    "101" =>
    [
        "Name" => "Faisal",
        "Job" => "Laravel Developer",
    ],

    "102" =>
    [
        "Name" => "Ahammed",
        "Job" => "UX UI Designer",
    ],
    "103" =>
    [
        "Name" => "Setu",
        "Job" => "Vue Developer",
    ],
];

echo "<br>";

foreach ($emp_details as $key => $value){
    foreach($value as $emp1){
        echo $emp1 . PHP_EOL . "<br>";
    }
}
