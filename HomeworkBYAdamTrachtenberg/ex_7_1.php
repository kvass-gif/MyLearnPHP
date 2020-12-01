<?php

class user
{
    function load_info($username)
    {
        // Загрузка профиля из базы данных
    }
}
$user = new user;
$user->load_info($_GET['username']);

// створення класу і об'єкті данного класу


$adam = new user;
$adam->load_info('adam');
$dave = new user;
$dave->load_info('adam');
// кожен об'єкт є незалежною одиницею і 
// живе своїм життям, в даному випадку на момент створення вони ідентичні