<?php
$fp = fopen($filename, 'r') or die("can't open file");
print "<table>\n";
while ($csv_line = fgetcsv($fp)) {
    print '<tr>';
    for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
        print '<td>' . htmlentities($csv_line[$i]) . '</td>';
    }
    print "</tr>\n";
}
print "</table>\n";
fclose($fp) or die("can't close file");


// код читає вміст csv файла та через функцію fgetcsv парсить в масиви що зручні в подальшому для роботи із ними    
