<?php

function str_rand(
    $length = 32,
    $characters =
    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
) {
    if (!is_int($length) || $length < 0) {
        return false;
    }
    $characters_length = strlen($characters) - 1;
    $string = '';
    for ($i = $length; $i > 0; $i--) {
        $string .= $characters[mt_rand(0, $characters_length)];
    }
    return $string;
}

// генерація випадкового рядка 
// функція приймає довжину рядка і символи що використовуються при генерації рядка
// перевіряє чи довжина є цілим числом і це цисло не є віємним, тоді повертається false
// запускається цикл що присвоює кожен новий символ до рядка, із врахуванням довжини рядка що було передоно параметром
