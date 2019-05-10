<?php
$variable = 3.14;
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

    if (is_bool($variable))
        {
        $type = "bool";
        $info_add = "Логический тип, принимает знчения 'истина' или 'ложь'";
        }
    elseif (is_float($variable)) 
        { 
        $type = "float";
        $info_add = "Вещественное число с плавающей точкой";
        }
    elseif (is_int($variable))
        {
        $type = "int";
        $info_add = "Целочисленное число, знаковое или беззнаковое";
        } 
    elseif (is_string($variable))
        {
        $type = "string";
        $info_add = "Строка, последовательность символов";
        }
    elseif (is_null($variable))
        {
        $type = "null";
        $info_add = "Отсутствие какого либо значения";
        }
    else 
    {
    $type = "other";
    $info_add = "Иной тип переменной: массив, объект или иной";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable." is ".$type?></p>
    <br> </br>
    <p><?=$info_add?></p>
</body>
</html>