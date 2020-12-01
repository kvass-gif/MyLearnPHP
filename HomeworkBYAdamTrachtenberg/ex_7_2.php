<?php
class user {
    public $username;
    function __construct($username, $password) {
    if ($this->validate_user($username, $password)) {
    $this->username = $username;
    }
    }
    // визначення конструктора в класі, що викликається автоматично 
    // при створенні об'єкта
    $user = new user('Grif', 'Mistoffelees');
    // подальше використання об'єкта користувач можливе тільки якщо
    // відбулася валідація 
