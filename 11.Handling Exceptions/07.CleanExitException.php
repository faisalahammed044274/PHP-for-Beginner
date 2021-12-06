<?php
// Clean exit from the Exception Block

 try{
     throw new Exception ("Raise an Exception");
 } catch(Exception $e){
     echo $e->getMessage();
 } finally{
     echo "This block can be used as cleanup section" . PHP_EOL . "<br>";
 }

?>