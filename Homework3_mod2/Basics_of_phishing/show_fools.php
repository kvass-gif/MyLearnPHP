<?php
$file = file_get_contents('suckers.txt', true);

$file = explode(";", $file);

array_pop($file);
for ($i = 0; count($file) > $i; $i += 2)
    echo $file[$i] . " " . $file[$i + 1] . "<br>";
