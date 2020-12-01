<?php
class Person
{
    private $__data = array();

    public function __get($property)
    {
        if (isset($this->__data[$property])) {
            return $this->__data[$property];
        } else {
            return false;
        }
    }
    public function __set($property, $value)
    {
        if (isset($this->__data[$property])) {
            return $this->__data[$property] = $value;
        } else {
            return false;
        }
    }
}
$johnwood = new Person;
$johnwood->email = 'jonathan@wopr.mil'; // Запись $user->__data['email']
print $johnwood->email; // Чтение $user->__data['email']
// jonathan@wopr.mil
// тут демонтсрується перегрузка методів __set і __get що спрощують і
// інкапсулюють взаємодію із приватними властивостями класу 
// при умові вставки непідходящих данних метод set може повернути false і не зробить змін у внутрішніх приватних полях

class Person
{
    // person и email заносятся в список допустимых свойств
    protected $data = array('person' => false, 'email' => false);
    public function __get($property)
    {
        if (isset($this->data[$property])) {
            return $this->data[$property];
        } else {
            return null;
        }
    }
    // Присваивание разрешается только для заранее
    // определенных свойств
    public function __set($property, $value)
    {
        if (isset($this->data[$property])) {
            $this->data[$property] = $value;
        }
    }
    public function __isset($property)
    {
        return isset($this->data[$property]);
    }
    public function __unset($property)
    {
        if (isset($this->data[$property])) {
            unset($this->data[$property]);
        }
    }
}

// тут ми бачимо що методи __set і __unset перевіряють чи є ці властивості в завчасно визначеному масиві
// якщо є тоді дія відбувається
