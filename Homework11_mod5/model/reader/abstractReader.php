<?php

namespace model;

abstract class AbstractReader
{

    protected static $myfile;
    protected static $list;

    abstract protected function transformArray();

    public function __construct($filename)
    {
        self::$myfile = fopen(PATH_TO_DATA . '/' . $filename, "r") or die("Unable to open file!");
    }
    protected function fclose()
    {
        fclose(self::$myfile);
    }
    public function getArray()
    {
        $arr = $this->transformArray();
        return $arr;
    }
}
