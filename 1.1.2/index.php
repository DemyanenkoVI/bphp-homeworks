<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей
$string1 = "Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до ";
$string2 = "лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ";
$end_day = 18.00;
$begin_day1 = 9.00;
$begin_day2 = 10.00;

switch (date("N")) {
    case 1: $day = "Понедельник";
        break;
    case 2: $day = "Вторник";
        break;
    case 3: $day = "Среда";
        break;
    case 4: $day = "Четверг";
        break;
    case 5: $day = "Пятница";
        break;
    case 6: $day = "Суббота";
        break;
    case 7: $day = "Воскресенье";
        break;
}

$hour = date("H");

if ($hour >= 6 and $hour <= 10){
    $time = "Доброе утро!";
    $image = "img/1.jpg";
} elseif ($hour >= 11 and $hour <= 17){
    $time = "Добрый день!";
    $image = "img/2.jpg";
} elseif ($hour >= 18 and $hour <= 22){
    $time = "Добрый вечер!";
    $image = "img/3.jpg";
} else {
    $time = "Доброй ночи!";
    $image = "img/4.jpg";
}

// Самое не рациональное решение, но умнее в голову ничего не пришло, работа вымотала

if ($day == "Понедельник" and $hour >=9 and $hour <= 18){
    $info_add = $string1. " ". $end_day; 
    } else {
        $info_add = "Завтра - ". $string2. " ". $begin_day1;
        if ($day == "Вторник" and $hour >=9 and $hour <= 18){
            $info_add = $string1. " ". $end_day; 
        } else {
            $info_add = "Завтра - ". $string2. " ". $begin_day1;
            if ($day == "Среда" and $hour >=9 and $hour <= 18){
            $info_add = $string1. " ". $end_day ;
            } else {
                $info_add = "Завтра - ". $string2. " ". $begin_day2;
                if ($day == "Четверг" and $hour >=10 and $hour <= 18){
                $info_add = $string1. " ". $end_day; 
                } else {
                    $info_add = "Завтра - ". $string2. " ". $begin_day2;
                    if ($day == "Пятница" and $hour >=10 and $hour <= 18){
                    $info_add = $string1. " ". $end_day; 
                    } else {
                        $info_add = "Завтра - ". $string2. " ". $begin_day2;
                        if ($day == "Суббота" and $hour >=10 and $hour <= 18){
                        $info_add = $string1. " ". $end_day ;
                        } else {
                            $info_add = "Послезавтра - ". $string2. " ". $begin_day1;
                            if ($day == "Воскресенье"){
                            $info_add = "Завтра - ". $string2. " ". $begin_day1;
                            } 
                        }
                    }
                }
            }
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
    <link href="mystyle.css" rel="stylesheet">
    <style>
        body {
            background: url(<?php echo $image ?>) no-repeat;
            background-size: 100%;
             }
    </style>
</head>
<body>
    <!-- Ваша html-вёрстка, частично задаваемая с помощью PHP -->
    <!-- Не нравится верстка, больше нравится работоспособность программ -->
    <p class=centr_str>
    <?php 
        echo $time.PHP_EOL."Сегодня ". $day;
        echo PHP_EOL.$info_add;
    ?>
    </p> 
</body>
</html>