<?php
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $middleName = htmlspecialchars($_POST['middleName']);

$firstName = mb_strtolower($firstName);
$lastName = mb_strtolower($lastName); 
$middleName = mb_strtolower($middleName);

$firstName = mb_strtoupper(mb_substr($firstName,0,1)).mb_substr($firstName,1, strlen($firstName)-1);
$lastName = mb_strtoupper(mb_substr($lastName,0,1)).mb_substr($lastName,1, strlen($lastName)-1);
$middleName = mb_strtoupper(mb_substr($middleName,0,1)).mb_substr($middleName,1, strlen($middleName)-1);

$fullName = $lastName .' '. $firstName .' '. $middleName;
$fio = mb_substr($lastName,0,1) . '.' . mb_substr($firstName,0,1) . '.' . mb_substr($middleName,0,1) . '.';
$surnameAndInitials = $lastName .' '. mb_substr($firstName,0,1) . '.' . mb_substr($middleName,0,1) . '.';

echo $fullName.'<br></br>';
echo $surnameAndInitials.'<br></br>';
echo $fio;
?>