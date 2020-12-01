<?php
class Person
{
    // Остальной код класса
    public function __toString()
    {
        return "$this->name <$this->email>";
    }
}
// метод toString дозволяє подати значення класу в рядковому вигляді

class Person
{
    protected $name;
    protected $email;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function __toString()
    {
        return (string)"$this->name <$this->email>";
    }
}


$rasmus = new Person;
$rasmus->setName('Rasmus Lerdorf');
$rasmus->setEmail('rasmus@php.net');
print $rasmus;

// Rasmus Lerdorf <rasmus@php.net>
// тільки звернення до об'єкта класу через функцію print 
// викликає метод toString що завжди повертає значення в рядкового типу
// для удостовірення ми можемо виконати приведення через (string)