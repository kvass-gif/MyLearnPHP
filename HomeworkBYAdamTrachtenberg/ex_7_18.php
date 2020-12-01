<?php
class Format
{
    public static function number(
        $number,
        $decimals = 2,
        $decimal = '.',
        $thousands = ','
    ) {
        return number_format($number, $decimals, $decimal, $thousands);
    }
}
print Format::number(1234.567);

// викликати статичні методи ми можемо через :: 
// особливість статичних методів в тому, що вони належать в цілому до класу а не до конкретного об'єкту класу


class Format
{
    public static function number(
        $number,
        $decimals = 2,
        $decimal = '.',
        $thousands = ','
    ) {
        return number_format($number, $decimals, $decimal, $thousands);
    }
    public static function integer($number)
    {
        return self::number($number, 0);
    }
}
print Format::number(1234.567) . "\n";
print Format::integer(1234.567) . "\n";

// 1,234.57
// 1,235

// через оператор self ми можемо звертатися до статичного методу
//  або властивості в середені класу тобто self це вказівник на клас
// відповідно значення integer буде інше

class Model
{
    protected static function validateArgs($args)
    {
        throw new Exception("You need to override this in a subclass!");
    }
    public static function find($args)
    {
        static::validateArgs($args);
        $class = get_called_class();
        // Здесь может выполняться запрос к базе данных, например:
        // SELECT * FROM $class WHERE ...
    }
}
class Bicycle extends Model
{
    protected static function validateArgs($args)
    {
        return true;
    }
}
Bicycle::find(['owner' => 'peewee']);

// при наслідуванні при перевантаженні функції слід позначати ключовим словом static


class Database
{
    private static $dbh = NULL;
    public function __construct($server, $username, $password)
    {
        if (self::$dbh == NULL) {
            self::$dbh = db_connect($server, $username, $password);
        } else {
            // Повторное использование существующего подключения
        }
    }
}
$db = new Database('db.example.com', 'web', 'jsd6w@2d');
// Выполнение группы запросов
$db2 = new Database('db.example.com', 'web', 'jsd6w@2d');
    // Дополнительные запросы

    // при повторному підключенні до бази данних клас вже міститиме дискриптор на базу данних
