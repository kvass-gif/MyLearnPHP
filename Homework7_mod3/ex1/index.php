<?php

require_once __DIR__ . "\\functions.php";
define("PATH_TO", "домашка-7 (модуль-3)\business-operations-survey-2019-international-engagement.csv");

$arr = [];
$arr = ReadFromFile(PATH_TO);
$header = array_shift($arr);

homeSort($arr);
$onOutput = crArrToShow($arr, 500);

require_once __DIR__ . "\\view.php";
