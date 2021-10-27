<?php
//it's just display what you write
$name = "Faisal";
$number = 30;

//Write a block of string using heredoc

echo <<< DOC_LABEL

You can write anything inside this
"Double Quotes" . anything
'Single Quotes' ..........
$name know how to write php
($number * 10)
New Lines and Strings.
(true) ? "Some Effect" : "No Effect";
PHP_EOL
<strong>Is this Bold</strong>
Apart from Variable nothing will work.

DOC_LABEL;

?>