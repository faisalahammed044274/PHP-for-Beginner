<?php
//  Create Add Anonymous Function and Call it

//Anonymous function doesn't have a function name
//They are also called as closures.

/*
// Dynamic Function
    function add($a, $b) : int{
        $addition = $a + $b;
        return $addition;
    }

    $addFunction = "add";
    echo "Result : " . $addFunction(1,2) . PHP_EOL . "<br>";
*/

//Anonymous Function

$addFunction = function($a , $b) :int {
    $addition = $a + $b;
    return $addition;
};

echo $addFunction(10,2) . PHP_EOL ."<br>";
$content = "This is a String Message";

$printContent = function() use($content){
    echo $content . PHP_EOL . "<br>";
};

$printContent();

$title = "I'ts my Title";

$printTitle = function() use($title){
    echo $title .PHP_EOL . "<br>";
};

$printTitle();

$myName = "Md Faisal Ahammed";

$printMyName = function() use($myName){
    echo $myName . PHP_EOL . "<br>";
};

$printMyName();



$myPet = "Tommy";

$printPetName = function() use($myPet){
    echo $myPet . PHP_EOL . "<br>";
};

$printPetName();


?>