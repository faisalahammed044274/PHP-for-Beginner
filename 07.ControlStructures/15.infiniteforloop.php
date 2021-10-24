<?php

// Infinite loop

$value = 1;
for ( ;  true ;) {

    $result = $value % 2;
    if ($result > 0) {
        echo 'Me SetuFaisal' . $value . PHP_EOL;
    }
    $value++;
}




?>