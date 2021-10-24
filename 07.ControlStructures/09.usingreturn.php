<?php
//Write a function. Return empty if input parameters are empty.

function checkUserRoles($userRoles){

if(empty($userRoles)) {
    echo "User Roles cannot be empty!".PHP_EOL;
    return;
}

//Donnot ececute this code when $userRoles is empty.

    switch($userRoles){
        case "Admin": 
            echo "Hello Admin!" . PHP_EOL;
            break;
        case "Editor": 
            echo "Hello Editor!" . PHP_EOL;
            break;
        default: 

    }
}

checkUserRoles("Admin");
echo '<br>' . PHP_EOL;
checkUserRoles('');
echo '<br>' . PHP_EOL;
checkUserRoles("Editor");

?>