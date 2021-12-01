<?php
// Learn to pass the variable reference to function parameter

// $result = 0;
// function add($a, $b, $result = null): int{
//     $addition = $a +$b;
//     return $addition;
// }

// echo $result . PHP_EOL;
// $result = add(1,2);
// echo $result . PHP_EOL;

$result = 0;
function add($a , $b, &$result = null){ //& person is passing that variable as a reference 
    $result = $a +$b;
    
}
echo "result 1 :". $result . PHP_EOL ."<br>";
add(1,2, $result);
echo "result 2 :" . $result . PHP_EOL . "<br>";
?>