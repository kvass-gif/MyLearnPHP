<?php
class Person
{
    public $name;
    protected $age;
    private $salary;
    public function __construct()
    {
        // ...
    }
    protected function set_age()
    {
        // ...
    }
    private function set_salary()
    {
        // ...
    }
}

// public - доступ до властивості повністю відкритий із любого місця програми
// protected - доступ можливий в середені класу так і в дочірніх класах
// private - доступ можливий тільки в середені класу і ніде більше
// конструктор завжди повинен бути публічний

$name = 'Rasmus Lerdorf';
$sqlite = new PDO('sqlite:/usr/local/users.db');
$rows = $db->query("SELECT email FROM users WHERE name LIKE '$name'");
$row = $rows->fetch();
$email = $row['email'];
// витягування даних із бази даних , знаходження email користувача

function getEmail($name)
{
    $sqlite = new PDO("sqlite:/usr/local/users.db");
    $rows = $db->query("SELECT email FROM users WHERE name LIKE '$name'");
    $row = $rows->fetch();
    $email = $row['email'];
    return $email;
}
$email = getEmail('Rasmus Lerdorf');

    // в попередньому прикладі дані не біли інкапсульовані тому код менш надійний
    // для вирішення цієї проблеми код краще помістити в окрему функцію і повертати дані у вигляді результату функції
