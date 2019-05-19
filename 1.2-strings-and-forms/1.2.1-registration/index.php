<?php
//Получение данных из формы
    $login = htmlspecialchars($_POST['login']); 
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $firstName = htmlspecialchars($_POST['firstName)']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $middleName = htmlspecialchars($_POST['middleName']);
    $code = htmlspecialchars($_POST['code']);
    $array = array( "@","/","*","?",",",";",":");
    $mask = '/[a-z0-9]*@[a-z0-9]*[.][a-z0-9]*/';
    $codeWord = 'nd82jaake';

//Проверял без формы 
    //$login = 'Alexandr'; 
    //$password = 'l1j9v';
    //$email = 'somemail@email.com';
    //$firstName = 'Иван';
    //$lastName = 'Иванов';
    //$middleName = 'Иванович';
    //$code = 'nd82jaake';

//Проверка на спецсимволы в строке
$err=0;
for ($i=0; $i < strlen($string1); $i++) {
    if (in_array($string1[$i], $array)) {
        $err = 1;
        break;    
    } else {
        $err = 0;
    }
}

//Проверка по всем полям
$string ='';
if ($err == 1) {
    $string = "Поле логин не должно содержать символы @/*?,;:";
}
if (strlen($password) <= 8) {
    $string = $string.'<br></br>'."Длина пароля должна быть минимум 8 символов ";
}
if (preg_match($mask,$email) == false) {
    $string = $string.'<br></br>'."Неверный формат email";
}
if (strlen($firstName) == 0) {
    $string = $string.'<br></br>'."Имя обязательно к заполнению";
}
if (strlen($lastName) == 0) {
    $string = $string.'<br></br>'."Фамилия обязательна к заполнению";
}
if (strlen($middleName) == 0) {
    $string = $string.'<br></br>'."Отчество обязательно к заполнению";
}    
if ($code != $codeWord) {
    $string = $string.'<br></br>'."Кодовое слово не верно";
}
//Вывод ошибок по полям, если есть
if ($string == '') {
    $string = "Все поля заполнены верно";
}
echo $string;  

?> 