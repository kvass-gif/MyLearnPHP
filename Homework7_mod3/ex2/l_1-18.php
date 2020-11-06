<?php

$db = new PDO('sqlite:/usr/local/data/sales.db');
$query = $db->query('SELECT region, start, end, amount FROM sales', PDO::FETCH_NUM);
// $sales_data = $db->fetchAll();
// Открытие файлового дескриптора для fputcsv()
$output = fopen('php://output', 'w') or die("Can't open php://output");
$total = 0;
// Сообщаем браузеру, что будет передаваться файл CSV
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="sales.csv"');
// Вывод заголовка
fputcsv($output, array('Region', 'Start Date', 'End Date', 'Amount'));
// Вывод каждой строки данных и увеличение $total
foreach ($sales_data as $sales_line) {
    fputcsv($output, $sales_line);
    $total += $sales_line[3];
}
// Вывод завершителя и закрытие файлового дескриптора
fputcsv($output, array('All Regions', '--', '--', $total));
fclose($output) or die("Can't close php://output");

// програма читає із бази данних по запиту інформацію по продажам і записує його в файл
// а потім через header передає клієнту в браузер