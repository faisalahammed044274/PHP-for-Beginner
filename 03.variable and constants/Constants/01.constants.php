<?php

// 1) Define and Use Constant
// 2) Change the value of Constant
// 3) Same name with Variable and Constant
// 4) Naming Rules of Constant
// 5) isset method for Constant

//--------Sample 1----------
    //Define Constants
    // define (NAME OF THE CONSTANT, VALUE OF THE CONSTANT);
    define("LANGUAGE", "PHP");
    $lang = LANGUAGE;

    echo "This program is writing using $lang <br>";
    echo "This program is writing using LANGUAGE<br>";
    echo "This program is writing using " . LANGUAGE. "<br>";

//--------Sample 2----------
    define("LANGUAGE4", "JAVA4");
    echo "This program is writing using" . LANGUAGE4 . "<br>";


//--------Sample 3----------
    $LANGUAGE = "JAVA";
    echo "This program is writing using" .$LANGUAGE."<br>";
    
    echo "This program is writing using" .LANGUAGE."<br>";

//--------Sample 4----------
    // define("1PHPVERSION", 7.4);
    // echo 1PHPVERSION; //ERROR don't using number.

define("PHPVERSION", " PHP Version : 7.4"."<br>");
echo PHPVERSION;

define("FRMWRK", "PHP Framework : Laravel, Symfony, Codeigniter etc"."<br>");
echo FRMWRK;

define ("PopularCMS", "PHP popular CMS : WordPress, Magento, Drupal etc" ."<br>");
echo PopularCMS;

//--------Sample 5----------
define("NAME", "My name is : Faisal Ahammed");
// echo isset(NAME);
// echo NAME;

//Access constants using the constant method
echo constant("NAME");

?>