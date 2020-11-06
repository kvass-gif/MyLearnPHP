<?php
print strrev('This is not a palindrome.');
// функція повертає перевернутий рядок по байтам

$s = "Once upon a time there was a turtle.";
// Разбиение строки по словам
$words = explode(' ', $s);
// Массив слов
$words = array_reverse($words);
// Построение строки
$s = implode(' ', $words);
print $s;
// поданий вище код спочатку розбиває рядок на слова із функцією explode
// потім функція що перевертає масив рядків по словам 
// і накінець функція implode обєднує масив рядків в один рядок і повертає його значення

$reversed_s = implode(' ', array_reverse(explode(' ', $s)));
// це також можна реалізувати одним рядком