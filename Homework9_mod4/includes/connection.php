<?php
// назва хоста
$server = "localhost";
// назва користувача
$user = "root";
// для данного користувача пароль не існує
$pass = "";
// база яку потрібно підключити
$db = "tutorials";


// підключаємось до бази даних і отримуємо об'єкт що представляє sql сервер
$link = mysqli_connect($server, $user, $pass, $db);
// якщо не вдалося підключитися до сервера то повертаємо номер помилки і опис помилки, після закривається процес
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
