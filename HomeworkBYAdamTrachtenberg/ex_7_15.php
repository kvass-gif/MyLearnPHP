<?php
class Users
{
    static function find($args)
    {
        // Здесь размещается реальная логика -
        // например, запрос к базе данных:
        // SELECT user FROM users WHERE $args['field'] = $args['value']
    }
    static function __callStatic($method, $args)
    {
        if (preg_match('/^findBy(.+)$/', $method, $matches)) {
            return static::find(array(
                'field' => $matches[1],
                'value' => $args[0]
            ));
        }
    }
}
$user = User::findById(123);
$user = User::findByEmail('rasmus@php.net');

// додавання нових методів динамічно після того як об'єкт було створено
