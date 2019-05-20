<?php
    $URL = htmlspecialchars($_POST['URL']);
    $t = htmlspecialchars($_POST['date']);    
    $cash = htmlspecialchars($_POST['cash']);
    $https = 'https://';

// Первая часть задания

$string = substr($URL,0,8);
if ($string == $https) {
    $result = 'Да (проверка по substr)';
} else {
    $result = 'Нет (проверка по substr)';
}

$pos = strpos($URL, $https);

if ($pos == 0) {
    $result2 = 'Да (проверка по strpos)';
} else {
    $result2 = 'Нет (проверка по strpos)';
}
echo $result . '<br></br>' . $result2;

// Вторая часть задания    

$t = substr($t , 3 , 2) . '.' . substr($t , 0 , 2) . '.' . substr($t , 6 , 4);
echo '<br></br>'.$t;

// Третья часть задания

$lengs = strlen($cash);
$lengs1 = $lengs % 3;
$lengs2 = intdiv($lengs, 3);
$string = '';

if ($lengs > $lengs1) {

    for ($i=0; $i < $lengs2; $i++) {
        $string = substr($cash, -3-3*$i, 3) . '  ' . $string;
    }
    $string = substr($cash, 0, $lengs1) . '  ' . $string;
} else {
    $string = substr($cash, 0, $lengs1);
}

echo '<br></br>' . $string. ' руб.';

?>