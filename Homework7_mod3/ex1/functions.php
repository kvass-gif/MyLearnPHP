<?php
function ReadFromFile($path)
{
    $arr = [];
    if (($handle = fopen($path, "r")) !== FALSE) {

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
            if (count($data) == 6) $arr[] = $data;

        fclose($handle);
        return $arr;
    }
    return false;
}

function homeSort(&$arr)
{

    $date = array();

    foreach ($arr as $key => $row) {
        $date[$key]  = $row[5];
    }

    array_multisort($date, SORT_DESC, $arr);
}

function showArr($arr, $count)
{
    for ($i = 0; $count > $i; $i++) {
        print_r($arr[$i]);
        echo "<br>";
    }
    echo "<br>";
}

function crArrToShow($arr, $count)
{
    $onOutput = [];
    foreach ($arr as $key => $value) {
        if ($key >= $count) break;
        $onOutput[] = [$value[1], $value[4], $value[5]];
    }
    return $onOutput;
}
