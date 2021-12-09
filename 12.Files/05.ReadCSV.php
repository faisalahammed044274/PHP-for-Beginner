<?php

//Read CSV File


//Read Entire Content
$fileName = "student.csv";
$content = file_get_contents($fileName);
print_r($content);
echo PHP_EOL;

//Read Line by Line
$csvFile = file($fileName);
var_dump($csvFile);
foreach($csvFile as $line) {
    echo $line . PHP_EOL;
}

//Line by Line
$csvFile = file($fileName);
var_dump($csvFile);
foreach($csvFile as $line){
    $data[] = str_getcsv($line);
    print_r($data);
}

//Convert Everything With Array Map
$csv = array_map('str_getcsv', file($fileName));
print_r($csv);
?>