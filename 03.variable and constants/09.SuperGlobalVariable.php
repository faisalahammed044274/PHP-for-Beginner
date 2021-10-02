<?php

// 1) How to use Super Global Variables
// 2) Predefined Super Global Variables
// 3) Access Global Variables using Super Global Variables from Functions.

// The PHP superglobal variables are:

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

//------------Sample 1 ---------------

global $message;
$message ="Welcome to PHP Super Globals";
echo $GLOBALS['message']. "<br>";

//------------Sample 2 ---------------
echo "Filename : " . $_SERVER['PHP_SELF'] ."<br>";

//------------Sample 3 ---------------
global $name;
$name = "Setu, Faisal";

function print_name(){
    echo $GLOBALS['name'];
}
print_name();