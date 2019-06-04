<?php 
$arg = var_dump($argv);
if ($arg == '') {
    $fileName = './data.json';
    } else {
        $fileName = './' . $arg[1];
}


$csv = array();
$file = fopen('data.csv', 'r');

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
}
?>