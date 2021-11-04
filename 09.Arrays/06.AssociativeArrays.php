<?php
// Learn to Define and Work with Associative Arrays

// In Associative arrays, you specific the index.
// Index => value;
// => is a special symbol to represent key and value.
// key => value ~ key is the index and value is the value at that index.

// Indexed Array
$arr = ["Mon", "Tues", "Wed", "Thrus", "Fri", "Sat", "Sun"];
var_dump($arr);
foreach($arr as $value){
    echo $value . PHP_EOL;
}


//Associative Array
$arr = ["Zero"=>"Mon", "Thusday"=>"Tues","Wednusday"=> "Wed","Thrusday"=> "Thrus","Friday" => "Fri","five"=> "Sat","six"=> "Sun"];
var_dump($arr);
foreach($arr as $value){
    echo $value . PHP_EOL;
}
echo PHP_EOL . "<h4>With Key :</h4>";
foreach($arr as $key => $value){
    echo $key . " => " . $value . PHP_EOL . "<br>";
}
echo PHP_EOL . "<br>";
foreach($arr as $key1 => $value1){
    echo $key1 . " => " . $value1 . PHP_EOL . "<br>";
}

//print all array keys with value
print_r (array_keys($arr));

echo "<br>" . PHP_EOL;

//Access only keys
foreach (array_keys($arr)as $key1) {
    echo $key1 . PHP_EOL . "<br>";
}

//Access the value only

foreach ($arr as $value) {
    echo $value . PHP_EOL;
}

$userDetails = 
[
    "Jhon" => "jhon@user.com",
    "Jenny" => "jenny@user.com",
    "Jase" => "jase@user.com",
    "Jame" => "jame@user.com",
    "Json" => "json@user.com",
];

var_dump($userDetails);
echo $userDetails["Jhon"] . PHP_EOL;
echo $userDetails["Jenny"] . PHP_EOL;
echo $userDetails["Jase"] . PHP_EOL;
echo $userDetails["Jame"] . PHP_EOL;
echo $userDetails["Json"] . PHP_EOL;

$userDetails["Mary"] = "mary@example.com";
var_dump($userDetails);


?>