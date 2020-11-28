<?php

namespace view;

use controller;

class View
{
    private static  $headers = [
        '#', 'Domain', 'IP-address', 'Rank', 'Status', 'Checked at'
    ];
    private static $data;
    private static $numout;

    private static $controller;


    public function __construct($numRow)
    {
        self::$controller = new \controller\Controller();
        self::$controller->drawUpData($numRow);
        self::$data = self::$controller->getData();
        self::$numout = count(self::$data);
    }

    public function execute()
    {
        require_once PATH_TO_VIEW . "/master.php";
    }
}
