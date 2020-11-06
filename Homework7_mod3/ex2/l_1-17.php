<?php
$packed = pack('S4', 1974, 106, 28225, 32725);

// запаковує бінарні дані в рядок 
//  S4 означає 4 16-розрядних беззнакових числа

$nums = unpack('S4', $packed);
// подібний порядок розраковки

$nums = unpack('S4num', $packed);
print_r($nums);
// розпаковка із ключами num (num1,num2,num3)
$nums = unpack('S1a/S1b/S1c/S1d', $packed);
print_r($nums);
// кожному ключу окремо присвоюється ключ

$s = 'platypus';
$ascii = unpack('c*', $s);
print_r($ascii);

// заповнення масиву ASCII кодами із рядка