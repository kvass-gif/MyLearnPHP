<?php
if ($argc < 2) {
    print "$argv[0]: classes1.php [, ...]\n";
    exit;
}
// Включение файлов
foreach (array_slice($argv, 1) as $filename) {
    include_once $filename;
}
// Получение информации о методах и функциях.
// Начинаем с классов.
$methods = array();
foreach (get_declared_classes() as $class) {
    $r = new ReflectionClass($class);
    // Исключение встроенных классов
    if ($r->isUserDefined()) {
        foreach ($r->getMethods() as $method) {
            // Eliminate inherited methods
            if ($method->getDeclaringClass()->getName() == $class) {
                $signature = "$class::" . $method->getName();
                $methods[$signature] = $method;
            }
        }
    }
}
// Затем добавляются функции
$functions = array();
$defined_functions = get_defined_functions();
foreach ($defined_functions['user'] as $function) {
    $functions[$function] = new ReflectionFunction($function);
}
// Методы сортируются в алфавитном порядке по классам
function sort_methods($a, $b)
{
    list($a_class, $a_method) = explode('::', $a);
    list($b_class, $b_method) = explode('::', $b);
    if ($cmp = strcasecmp($a_class, $b_class)) {
        return $cmp;
    }
    return strcasecmp($a_method, $b_method);
}
uksort($methods, 'sort_methods');
// Алфавитная сортировка функций.
// Из списка нужно исключить функцию сортировки.
unset($functions['sort_methods']);
// Сортировка
ksort($functions);
// Вывод информации
foreach (array_merge($functions, $methods) as $name => $reflect) {
    $file = $reflect->getFileName();
    $line = $reflect->getStartLine();
    printf("%-25s | %-40s | %6d\n", "$name()", $file, $line);
}


// HTTP::Date() | /usr/lib/php/HTTP.php | 38
// HTTP::head() | /usr/lib/php/HTTP.php | 144
// HTTP::negotiateLanguage() | /usr/lib/php/HTTP.php | 77
// HTTP::redirect() | /usr/lib/php/HTTP.php | 186


// функції get_declared_classes() і get_declared_functions() спрощують інтроспекцію, але не входять в клас Reflection
// Необхідно відфільтрувати всі вбудовані класи та функції PHP, інакше код буде містити інформацію про всі вбудовані установки PHP
// get_declared_classes() не відрізняє вбудовані і користувацькі класи тому для перевірки слід використовувати ReflectionClass::isUserDefined()
// вихіднді дані краще переглядати в відсортованому вигляді 