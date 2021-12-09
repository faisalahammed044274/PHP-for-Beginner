<?php
// How to Work with File Operations (Copy, Rename and Delete Files )

//Check if file exists
$fileName = "MyFolder.txt";

if (file_exists($fileName)){
    echo "File Exists." . PHP_EOL;

        //Check if it is a Directory
        if(is_dir($fileName)){
            die("It is a Directory not File.");
        }

        //Copy File
        copy($fileName, "CopyFile.txt");
        copy("CopyFile.txt","CopyFile1.txt");

        //Rename the Files
        rename("CopyFile1.txt","RenamedFile.txt");
        copy("RenamedFile.txt","RenamedFileDeleted.txt");

        //Deleted Files
        unlink("RenamedFileDeleted.txt");

}else{
    echo "File/Directory Doesnot exists" . PHP_EOL;
    die("No Such Files");
}



?>