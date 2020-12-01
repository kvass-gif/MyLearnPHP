<?php
function add($person)
{
    if (!($person instanceof Person)) {
        die("Argument 1 must be an instance of Person");
    }
}
// оператор instanceof перевіряє чи заданний об'єкт належить певному класу якщо так то вираз повертає true

class Person
{ /* ... */
}
class Kid extends Person
{ /* ... */
}
$kid = new Kid;
if ($kid instanceof Person) {
    print "Kids are people, to.\n";
}
// Kids are people, too.
// це може працювати при наслідуванні так ніби змінна містить посилання на базовий клас

interface Nameable
{
    public function getName();
    public function setName($name);
}
class Book implements Nameable
{
    private $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }
}
$book = new Book;
if ($book instanceof Book) {
    print "You can name a Book.\n";
}
    // You can name a Book
    // так і інтерфейс не заважає instanceof працювати коректно