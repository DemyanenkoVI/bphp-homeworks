<?php
    $firstName = htmlspecialchars($_POST['firstName'];
    $lastName = htmlspecialchars($_POST['lastName'];
    $middleName = htmlspecialchars($_POST['middleName'];

$fullName =$firstName .' '. $lastName .' '. $middleName;
$fio = strtouper(mb_substr($firstName,0,1).mb_substr($lastName,0,1).mb_substr($middleName,0,1);
$surnameAndInitials = ucfirst($firstName) . 
echo fio;
?>
