<?php

//Show the Time Minutes Difference between two times
//time() to get the time in milliseconds
//sleep(10) for some time
//use Date_diff  method to find the difference in date

$date1 = time();
sleep(10);
$date2 = time();
$diff = ($date2 - $date1) / 50;
echo $diff;

//date_diff

$start = date_create("1991-12-26 12:06:00");
$end = date_create("2021-12-10 05:55:26");
$diff = date_diff($end, $start);
print_r($diff);

?>