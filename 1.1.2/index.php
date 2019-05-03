<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей

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
if (date("H")>=6 and date("H")<=10){
    $time = "Доброе утро!";
    $image = "img/1.jpg";
} elseif (date("H")>=11 and date("H")<=17){
    $time = "Добрый день!";
    $image = "img/2.jpg";
} elseif (date("H")>=18 and date("H")<=22){
    $time = "Добрый вечер!";
    $image = "img/3.jpg";
} else {
    $time = "Доброй ночи!";
    $image = "img/4.jpg";
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
    <p>
    <?php 
        echo $time.PHP_EOL."Сегодня ". $day;
    ?>
    </p>
</body>
</html>