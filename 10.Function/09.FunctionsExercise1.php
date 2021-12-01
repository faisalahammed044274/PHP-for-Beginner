<?php
// Write a Simple Function to Accept Parameters and Return Value

    function getFullName(String $firstName, String $lastName):
        String{
            $fullName = $firstName . " , " . $lastName;
            return $fullName;
        }
        echo getFullName("Faisal", "Ahammed");
?>