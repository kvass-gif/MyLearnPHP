<?php

$array = range(1, 52);

//перебір всіх елементів масива
foreach ($array as $value)
    echo $value . " ";
echo "<br>";

//перебір всіх елементів по ключу і значенню
foreach ($array as $key => $value) {
    echo $key . " " . $value . "<br>";
}

// такий же варіант перебору по ключу і значенню але через цикл for стає складнішим для сприйняття
//можливе використання тільки числових масивів
for ($key = 0, $size = count($array); $key < $size; $key++) {
    echo $key . " " . $value . "<br>";
}

//подібно до foreach, але спосіб застарілий краще використовувати foreach
reset($array); // Внутренний указатель устанавливается в начало массива
while (list($key, $value) = each($array)) {
    // ...
}

//використовуючи foreach для перезапису даних в масивы потрыбно викоритовувати пряме звернення до елементу
//в цьому випадку isset перевіряє чи ініціалізоване значення під ключем, якщо ні то ключ видаляється
foreach ($array as $item => $value) {
    if (!isset($value)) {
        unset($items[$item]); // Обращение к массиву напрямую
    }
}