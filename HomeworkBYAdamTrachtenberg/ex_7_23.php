<?php
$language = $_REQUEST['language'];
$valid_langs = array(
    'en_US' => 'US English',
    'en_UK' => 'British English',
    'es_US' => 'US Spanish',
    'fr_CA' => 'Canadian French'
);
if (isset($valid_langs[$language]) && class_exists($language)) {
    $lang = new $language;
}

// створення об'єкту може здійснюватися динамічно
// в цьому випадку він може створюватись якщо клас був раніше оголошений
