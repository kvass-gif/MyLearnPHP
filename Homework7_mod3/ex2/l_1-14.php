<?php
while ($s = fgets($fp, 1024)) {
    $fields[1] = substr($s, 0, 25); // Первое поле: первые 25 символов
    $fields[2] = substr($s, 25, 15); // Второе поле: следующие 15 символов
    $fields[3] = substr($s, 40, 4); // Третье поле: следующие 4 символа
    $fields = array_map('rtrim', $fields); // Удаление завершающих пропусков
    // Функция обработки полей
    // process_fields($fields);
}
fclose($fp) or die("can't close file");

// виводить відформатовані рідки із файлу до раніше відомого формату

function fixed_width_unpack($format_string, $data)
{
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $r[$i] = unpack($format_string, $data[$i]);
    }
    return $r;
}
// можна скористатися функцією що буде значно акуратніше ніж було раніше

$booklist = <<<END
Elmer Gantry Sinclair Lewis 1927
The Scarlatti InheritanceRobert Ludlum 1971
The Parsifal Mosaic Robert Ludlum 1982
Sophie's Choice William Styron 1979
END;


function fixed_width_substr($fields, $data)
{
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $line_pos = 0;
        foreach ($fields as $field_name => $field_length) {
            $r[$i][$field_name] = rtrim(substr($data[$i], $line_pos, $field_length));
            $line_pos += $field_length;
        }
    }
    return $r;
}
$book_fields = array(
    'title' => 25,
    'author' => 15,
    'publication_year' => 4
);
$book_array = fixed_width_substr($book_fields, $booklist);


// для більшої структорованості коду можна створити функцію, яка бути отримувати параметрами масив назв полів із іх довжинами
// та на виході повертати масив масиві рідків із відповідними ключами і значеннями

function fixed_width_unpack1($format_string, $data)
{
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $r[$i] = unpack($format_string, $data[$i]);
    }
    return $r;
}

// також можна через unpack і форматним рядком


$fields = str_split($line_of_data, 32);
// $fields[0] - байты 0 - 31
// $fields[1] - байты 32 - 63
// и т. д.

// якщо всі підрядки в рядку містять однакову довжину то можна скоритсатися str_split що ділить рядок на рядки однакової довжини
