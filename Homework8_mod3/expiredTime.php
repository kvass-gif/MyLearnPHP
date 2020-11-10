<?php


//запустити в фоновому процесі
date_default_timezone_set('Europe/Kiev');

function clear($path)
{
    if (file_exists($path)) {
        $arrDir = scandir($path);
        array_shift($arrDir);
        array_shift($arrDir);
        foreach ($arrDir as $file) {
            unlink($path . '/' . $file);
        }
    }
}
function countHours($name)
{

    $fileTime = new DateTime(date('Y-m-d H:i:s', filemtime(__DIR__ . '\data\\' . $name)));
    $currentTime = new DateTime(date('Y-m-d H:i:s', time()));

    $interval = date_diff($currentTime, $fileTime);
    $subHours = intval($interval->format('%h'));

    return $subHours;
}


do {
    $files = scandir('data');
    if ($files === false) continue;
    array_shift($files);
    array_shift($files);
    if (count($files) == 0) continue;

    foreach ($files as $file) {
        $h = countHours($file);
        if ($h > 24) {
            clear("data/" . $file);
            rmdir("data/" . $file);
        }
    }
} while (true);
