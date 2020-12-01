<?php
interface NameInterface
{
    public function getName();
    public function setName($name);
}
class Book implements NameInterface
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
// клас що визначає інтерфейс повиненен изначати всі методи інтерфейсу
// інакше поверне помилку
trait NameTrait
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
// також є трейт, він може використовуватися в декількох різних класах без наслідування
class Book
{
    use NameTrait;
}
$interfaces = class_implements('Book');
if (isset($interfaces['NameInterface'])) {
    // Book реализует NameInterface
}
// відповідна функція дає можливість визначити чи інплементує даний клас відповідний інтерфейс
class Child
{
    use NameTrait;
}
$rc = new ReflectionClass('Child');
if ($rc->implementsInterface('NameInterface')) {
    print "Book implements NameInterface\n";
}

// ооп стиль визначення знаходження інтерфейсу в класі


class Book implements NameInterface, SizeInterface
{
    use NameTrait, SizeTrait;
}

    // клас може реалізовувати декілька інтерфейсів і типажів
