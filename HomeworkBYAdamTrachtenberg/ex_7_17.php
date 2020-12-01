<?php
class Math
{
    const pi = 3.14159; // Универсальные
    const e = 2.71828; // константы
}
$area = math::pi * $radius * $radius;

// константи класу на відмінну від змінних декларуються без префіксу $ 
// звернення до константи відбувається через :: 

class Circle
{
    const pi = 3.14159;
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function circumference()
    {
        return 2 * self::pi * $this->radius;
    }
}
$c = new circle(1);
print $c->circumference();

// рузультат роботи класу виведе коректний результат на відмінну від наступного
define('pi', 10); // Глобальная константа

$c = new circle(1);
print $c->circumference();
// після зазначення глобальної константи вона має більший пріорітет тому констатна класу проігнорується

class Constants
{
    const pi = 3.14159;
    // Остальной код класса
}
$class = new Constants;
print $class::pi;

// також через об'єкт класу можна звертатися до констатни це не помилка
