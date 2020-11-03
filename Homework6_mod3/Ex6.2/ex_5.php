<?php
$fruits = array(
    'red' => array('strawberry', 'apple'),
    'yellow' => array('banana')
);

// функція перетворення масиву в рядо із розділювачем
$string = join(',', $fruits['red']);
var_dump($string);


// також можливий варіант через foreach із таким же результатом
$string = '';
foreach ($fruits['red']  as $key => $value) {
    $string .= ",$value";
}
$string = substr($string, 1);
var_dump($string);

// випадок показує огортання елементів масиву в тег <b> і об'єднує в рядок який потім може бути записаний html документ
$left = '<b>';
$right = '</b>';
$html = ['перше', "друге"];
$html = $left . join("$right,$left", $html) . $right;
var_dump($html);

$string = '';
foreach ($fruits as $key => $value) {

    if ('password' != $key) {
        $string .= ",<b>$value</b>";
    }
}
$string = substr($string, 1); // Удаление "," в начале
