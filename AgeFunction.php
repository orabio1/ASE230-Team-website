<?php

function calculateAge($dateofbirth) {
    $dob = DateTime::createFromFormat('m-d-y', $dateofbirth);
    
    $currentDate = new DateTime();
    
    $age = $currentDate->diff($dob)->y;
    
    return $age;
}
?>