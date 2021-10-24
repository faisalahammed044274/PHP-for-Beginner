<?php

$inputValue = 0;
if( $inputValue <= 0){
    goto error_block;
}

exit();
error_block: 
    echo "This is a Error Block and will execute anyway" . PHP_EOL;
    echo "<br>";

for($count= 0; $count <= 50; $count++){
    if ($count == 10){
        goto loop2; //don't recommanded for looping
        break; // recommanded for loop
    }
}
exit();
loop2: 
echo "Counter value is $count" . PHP_EOL;

?>