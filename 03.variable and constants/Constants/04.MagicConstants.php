<?php
// Learn about the Magic Constants

// Name 	                Description
//-----------------------------------------------------
// __LINE__ 	        The current line number of the file.
// __FILE__ 	        The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
// __DIR__ 	            The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
// __FUNCTION__ 	    The function name, or {closure} for anonymous functions.
// __CLASS__ 	        The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
// __TRAIT__ 	        The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
// __METHOD__ 	        The class method name.
// __NAMESPACE__ 	    The name of the current namespace.
// ClassName::class 	The fully qualified class name. 

// https://www.php.net/manual/en/language.constants.magic.php

echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
// echo __FUNCTION__ ."<br>";
// echo __CLASS__."<br>";
// echo __TRAIT__ ."<br>";
// echo __METHOD__ ."<br>";
// echo __NAMESPACE__ ."<br>";
echo MyName::class ."<br>";


?>