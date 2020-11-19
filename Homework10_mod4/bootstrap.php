<?php

session_start();

define('BASE_URL', $_SERVER['HTTP_HOST']);
define('ASSETS_PATH', BASE_URL . '/Homework/Homework10_mod4/assets');

require_once 'catalog.php';
require_once 'cart.php';
require_once 'functions.php';
require_once 'routing.php';

if (!cartIsset()) {
    cartInit();
}
// якшо є товар в корзині
render('cart/list', [
    'cartProducts' => cartProductsFilled($products),
    'suggested' => getSuggested($products, cartProducts())
]);
