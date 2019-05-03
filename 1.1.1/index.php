<?php
$variable = 3.14;
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

    if (is_bool($variable))
        {
        $type = "bool";
        }
    elseif (is_float($variable)) 
        { 
        $type = "float";
        }
    elseif (is_int($variable))
        {
        $type = "int";
        } 
    elseif (is_string($variable))
        {
        $type = "string";
        }
    elseif (is_null($variable))
        {
        $type = "null";
        }
    else 
    {
    $type = "[]";
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
</body>
</html>