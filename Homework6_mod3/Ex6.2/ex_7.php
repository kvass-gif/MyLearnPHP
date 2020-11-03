<?php
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
// функція повертає натурально відсортований масив в зворотньому порядку
// змінити порядок сортування можна лише поміняаши вхідні параметри місцями
usort($tests, function ($a, $b) {
    return strnatcmp($b, $a);
});
print_r($tests);

// сортування дат по спаданню використовуючи функцію usort
function date_sort($a, $b)
{
    list($a_month, $a_day, $a_year) = explode('/', $a);
    list($b_month, $b_day, $b_year) = explode('/', $b);
    if ($a_year > $b_year) return 1;
    if ($a_year < $b_year) return -1;
    if ($a_month > $b_month) return 1;
    if ($a_month < $b_month) return -1;
    if ($a_day > $b_day) return 1;
    if ($a_day < $b_day) return -1;
    return 0;
}
$dates = array('12/14/2000', '08/10/2001', '08/07/1999');
usort($dates, 'date_sort');
print_r($dates);

function array_sort($array, $map_func, $sort_func = '')
{
    $mapped = array_map($map_func, $array); // Кэширование значений $map_func()
    if ('' === $sort_func) {
        asort($mapped); // asort() работает быстрее usort()
    } else {
        uasort($mapped, $sort_func); // Необходимо сохранять ключи
    }
    while (list($key) = each($mapped)) {
        $sorted[] = $array[$key]; // Использование отсортированных ключей
    }
    return $sorted;
}
function u_length($a, $b)
{
    $a = strlen($a);
    $b = strlen($b);
    if ($a == $b) return 0;
    if ($a > $b) return 1;
    return -1;
}
function map_length($a)
{
    return strlen($a);
}
$tests = array(
    'one', 'two', 'three', 'four', 'five',
    'six', 'seven', 'eight', 'nine', 'ten'
);
// Быстрее для < 5 элементов с u_length()
usort($tests, 'u_length');
// Быстрее для >= 5 элементов с map_length()
$tests = array_sort($tests, 'map_length');
