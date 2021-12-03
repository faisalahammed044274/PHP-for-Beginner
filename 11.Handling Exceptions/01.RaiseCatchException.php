<?php
//Raise and Catch a Divide by Zero Error.


function divide($x, $y) : int{
    if ($y <= 0){
        throw new Exception("Divide by Zero Exception 
        might happen");
    }

    $result = $x / $y;
    return $result;
}

try{
    //This is a error in this block
    $result = divide(1,0);


}catch(Exception $e){
    //Jump to this block if try block has an error
    echo "Caught Exception" . $e->getMessage() . PHP_EOL ;

}



?>