<?php
class shape
{
    function draw($radius)
    {
        // Вывод на экран
    }
}
class circle extends shape
{
    function draw($radius)
    {
        // Проверка данных
        if ($radius > 0) {
            parent::draw($radius);
            return true;
        }
        return false;
    }
}

//використання батьківського метода в дочірньому, що називається перевантаженням метода
// перевірку на виклик метода можна робити як і в середені метода так і поза ним
$circle = new circle;
if ($circle->draw($radius)) {
    $circle->parent::draw($radius);
}
