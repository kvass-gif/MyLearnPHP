<?php
//функція range створює і ініціалізує масив цілими числами від в зазначеному діапазоні
$cards = range(1, 52);
foreach ($cards as $value) echo $value . " ";
echo "<br>";
//третій аргумент додає крок 2 до діапазона
$odd = range(1, 52, 2);
foreach ($odd as $value) echo $value . " ";
echo "<br>";
//діапазон починається із числа 2 із кроком 2
$even = range(2, 52, 2);
foreach ($even as $value) echo $value . " ";
echo "<br>";
