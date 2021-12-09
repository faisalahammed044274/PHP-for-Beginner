<?php

//Convert Date from Date Array

$dateArr = getdate();
// var_dump($dateArr);

foreach($dateArr as $format=> $val){
    echo "$format => $val" . PHP_EOL;
}

echo "Weekly : " . $dateArr["weekday"] . PHP_EOL;
echo "Weekly : " . getdate()["weekday"] . PHP_EOL;
echo "Year : " . getdate()["year"] . PHP_EOL
?>