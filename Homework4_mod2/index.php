<?php

error_reporting(E_ALL);
define('MODEL_PATH', __DIR__ . '\model\\');
define("MAX_FILESIZE", 15728640);
define('MODEL_PATH_DATA', __DIR__ . '\model\\data');
define('MODEL_PATH_OUT', __DIR__ . '\model\\outsource');
$availableFormats = ["jpeg", "png", "gif"];
$arrayErrors = [];

require_once "controller/" . "validation.php";
require_once "view/" . "form.php";
