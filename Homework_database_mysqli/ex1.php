<?php

$dbconf =
    [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'dbname' => 'test',
    ];



$mysqli = new mysqli($dbconf['host'], $dbconf['user'], $dbconf['pass']);
$mysqli->select_db('post_db');
// підключення до БД

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
// перевірка підключення до БД, якщо є тоді виходимо із процесу

if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("%s", $row[0]);
    // var_dump($row);

    $result->close();
}
// якщо підключення успішне виводимо назву
