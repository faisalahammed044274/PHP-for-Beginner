<?php
/*
//Single exception types

try {
    //run your code here
} catch (exception $e) {
    //code to handle the exception
} finally {
    //Optional code that always runs
}


//PHP try catch with multiple exception types

try {
    //run your code here
} catch (Exception $e) {
    echo $e->getMessage();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
*/
//When to use try catch-finally

try {
    print "This is our try block n" . "<br>";
    throw new Exception();
} catch (Exception $e) {
    print "something went wrong, caught yah! n" . "<br>";
} finally {
    print "This part is always executed n" . "<br>";
}

/*
// Creating custom PHP exception types

class DivideByZeroException extends Exception
{
};

class DivideByNegativeException extends Exception
{
};

function process_divide($denominator)
{

    try {
        if ($denominator == 0) {
            throw new DivideByZeroException();
        } elseif ($denominator < 0) {
            throw new DivideByNegativeException();
        } else {
            echo 100 / $denominator;
        }
    } catch (DivideByZeroException $ex) {
        echo "Divide by zero exception !";
    } catch (DivideByNegativeException $ex) {
        echo "DIvide by negetive number exception !";
    } catch (Exception $x) {
        echo "UNKNOWN EXCEPTION !";
    }
}
*/

// function our_global_exception_handler($exception) {
//     //This could should log the exception to disk and an error tracking system
//     echo "Exception : " . $exception->getMessage();   
// }

// set_exception_handler("our_global_exception_handler");
