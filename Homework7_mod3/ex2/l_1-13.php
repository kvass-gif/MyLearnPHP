<?php
$books = array(
    array('Elmer Gantry', 'Sinclair Lewis', 1927),
    array('The Scarlatti Inheritance', 'Robert Ludlum', 1971),
    array('The Parsifal Mosaic', 'William Styron', 1979)
);
foreach ($books as $book) {
    print pack('A25A15A4', $book[0], $book[1], $book[2]) . "<br>";
}
// повертає рядок відповідного формату де кожен підрядок має фіксовану довжину
// що дозволяє звести всі три масива рядків в однакову довжину рядків



foreach ($books as $book) {
    $title = str_pad(substr($book[0], 0, 25), 25, '.');
    $author = str_pad(substr($book[1], 0, 15), 15, '.');
    $year = str_pad(substr($book[2], 0, 4), 4, '.');
    print "$title$author$year\n";
}
// повторює вище функцію в розвернутому вигляді із використанням як мінімум двох функцій
