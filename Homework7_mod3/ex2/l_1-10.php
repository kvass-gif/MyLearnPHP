<?php
$zipcode = trim($_GET['zipcode']);
$no_linefeed = rtrim($_GET['text']);
$name = ltrim($_GET['name']);

// " " (ASCII 32 (0x20)), an ordinary space.
// "\t" (ASCII 9 (0x09)), a tab.
// "\n" (ASCII 10 (0x0A)), a new line (line feed).
// "\r" (ASCII 13 (0x0D)), a carriage return.
// "\0" (ASCII 0 (0x00)), the NUL-byte.
// "\x0B" (ASCII 11 (0x0B)), a vertical tab.
// функція trim видаляє лишні вище перелічені символи на початку і кінці рядку
// існують окремо функції для початку і кінця рядку

// Удаление цифр и пробелов из начала строки
print ltrim('10 PRINT A$', ' 0..9');
// Удаление точки с запятой с конца строки
print rtrim('SELECT * FROM turtles;', ';');

// також можна додавати символи для пошуку і видалення другим аргументом