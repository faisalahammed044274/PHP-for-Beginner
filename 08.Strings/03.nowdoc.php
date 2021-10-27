<?php
//it's just display what you write
//it's not working string or anything as is printed.
$name = "Faisal";
$number = 30;

//Write a block of string using nowdoc

echo <<< 'DOC_LABEL'

You can write anything inside this
"Double Quotes" . anything
'Single Quotes' ..........
$name know how to write php
($number * 10)
New Lines and Strings.
(true) ? "Some Effect" : "No Effect";
PHP_EOL
<strong>Is this Bold</strong>
No Variable interpolation will happen in nowdoc.

DOC_LABEL;

?>