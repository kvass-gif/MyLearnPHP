<?php
class Person
{
    public $name;
    protected $spouse;
    private $password;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return  $this->$name;
    }
    protected function setSpouse(Person $spouse)
    {
        if (!isset($this->spouse)) {
            $this->spouse = $spouse;
        }
    }
    private function setPassword($password)
    {
        $this->password = $password;
    }
}

Reflection::export(new ReflectionClass('Person'));


// Class [ <user> class Person ] {
// @@ /www/reflection.php 3-25
// - Constants [0] {
// }
// - Static properties [0] {
// }
// - Static methods [0] {
// }
// - Properties [3] {
// Property [ <default> public $name ]
// Property [ <default> protected $spouse ]
// Property [ <default> private $password ]
// }
// - Methods [4] {
//     Method [ <user> <ctor> public method _ _construct ] {
//     @@ /www/reflection.php 8 - 10
//     - Parameters [1] {
//     Parameter #0 [ $name ]
//     }
//     }
//     Method [ <user> public method getName ] {
//     @@ /www/reflection.php 12 - 14
//     }
//     Method [ <user> protected method setSpouse ] {
//     @@ /www/reflection.php 16 - 20
//     - Parameters [1] {
//     Parameter #0 [ Person or NULL $spouse ]
//     }
//     }
//     Method [ <user> private method setPassword ] {
//     @@ /www/reflection.php 22 - 24
//     - Parameters [1] {
//     Parameter #0 [ $password ]
//     }
//     }
//     }
//     }


// інтроспекція дозволяє прочитати інформацію про клас
// зручно при створенні документації або при використанні вже кимось написаних класів щоб розібрати їхню сутність