<?php

namespace controller;

use model;

class Controller
{

    protected static $model;
    protected static $data;

    public function __construct()
    {
        self::$model = new \model\Model('top10milliondomains.txt');
    }
    public function drawUpData($amount)
    {
        self::$model->sortByRank();
        self::$model->transformArray($amount);
        self::$data = self::$model->getData();
    }

    public function getData()
    {
        return self::$data;
    }

    public function getCount()
    {
        return count(self::$data);
    }
}
