<?php
// 1) Create a File, Write Content and Save the File.
// 2) Use fopen libraries
// 3) Append some text in the last.

//Open the File
$fileHandler = fopen("newFile.txt", "w");

// write the file
fwrite($fileHandler, "This is some text\r\n");
fwrite($fileHandler, "This is another text \r\n");

//Save the File
fclose($fileHandler);
file_put_contents("NewFile.txt", "Some more data appand", FILE_APPEND);
?>