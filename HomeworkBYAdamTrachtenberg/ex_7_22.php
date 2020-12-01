<?php
function __autoload($class_name)
{
    include "$class_name.php";
}
$person = new Person;
// підключення файлу проводиться під час створення його об'єкту,
// що може пришвидшити роботу програми
use Mysite\Person;

$person = new Person;   

// якщо користуватися згодою про імена в github то можна поступити таким чином