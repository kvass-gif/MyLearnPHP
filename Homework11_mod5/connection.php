<?php


define('PATH_TO_DATA', __DIR__ . '/data');
define('PATH_TO_MODEL', __DIR__ . '/model');
define('PATH_TO_VIEW', __DIR__ . '/view');

//скрипт на моїй машині довго виконується потрібно трохи почекати
// як би міг оптимізувати щоб дані виводились динамічно, але на цьому етапі це не доцільно
set_time_limit(500);


require_once PATH_TO_MODEL . '/reader/interface.php';
require_once PATH_TO_MODEL . '/reader/abstractReader.php';
require_once PATH_TO_MODEL . '/reader/TxtReader.php';
require_once PATH_TO_MODEL . '/reader/CSVReader.php';
require_once PATH_TO_MODEL . '/model.php';
require_once PATH_TO_MODEL . '/CUrl.php';


require_once 'controller.php';

require_once PATH_TO_VIEW . '/classView.php';


$view = new \view\View(500);
$view->execute();
