<?php

$movies = array(
    [
        "name" => "Bakc to the future",
        "box_office_gross" => 5000500,
    ],
    [
        "name" => "Blue sea",
        "box_office_gross" => 4000000,
    ],
);
// вибірка по умові що касові збори будуть меншими за потрібне число
$flops = [];
foreach ($movies as $movie) {
    if ($movie['box_office_gross'] < 5000000) {
        $flops[] = $movie;
    }
}
var_dump($flops);
echo "<br>";


// аналогічний результат через функцію array_filter
$flops = array_filter($movies, function ($movie) {
    return ($movie['box_office_gross'] < 5000000) ? 1 : 0;
});

var_dump($flops);


// виборка першого елемента що задовільняє умові
foreach ($movies as $movie) {
    if ($movie['box_office_gross'] > 200000000) {
        $blockbuster = $movie;
        break;
    }
}
var_dump($flops);


// так само тільки в функції повертається перше підходяще значення
function blockbuster($movies)
{
    foreach ($movies as $movie) {
        if ($movie['box_office_gross'] > 200000000) {
            return $movie;
        }
    }
}

blockbuster($movies);
var_dump($flops);
