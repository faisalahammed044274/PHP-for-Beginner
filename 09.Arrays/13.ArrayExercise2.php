<?php
// Read the Multi-Dimention Array

// 1) Write a Foreach Loop to read this array

$planets = [
    "planets" =>
    [
        "sun" => ["temp" => "hot", "color" => "red"],
        "moon" => ["temp" => "cold", "color" => "white"],
        "earth" => ["temp" => "normal", "color" => "blue"],
    ],
];

foreach($planets as $key => $planet) {
    foreach($planet as $planetname => $planetdetails) {
        foreach($planetdetails as $p){
            echo $p . PHP_EOL . "<br>";
        }
    }
}
