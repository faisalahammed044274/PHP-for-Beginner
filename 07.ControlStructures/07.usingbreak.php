<?php
//Understand how to break the loop using 'break' keyword

//Break the infinite loop
//Print 1 to 20 using infinite loop

// $value = 1;

// do{

//     echo $value . PHP_EOL;

//     if ($value >= 2000){
//         break;
//     }
//     $value++;

// }while(true);


//Break Multiple loop

$loop1 = 1 ;
$loop2 = 1 ;
$loop3 = 1 ;

for ( ; $loop1 <= 10; $loop1++) {

    while($loop2 <= 10) {

        do{
            $loop3++;
        } while($loop3 <= 10);
        $loop2++;
    }
    echo "Loop 1 : $loop1" . PHP_EOL . "<br>";
}

?>