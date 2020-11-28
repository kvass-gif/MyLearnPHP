<?php

namespace model;

class CSVReader extends AbstractReader implements iReader
{
    protected function transformArray()
    {
        $arr = [];
        foreach (self::$list as $el) {
            $buf2['id'] =  $el[0];
            $buf2['domain'] =  $el[1];
            $buf2['rank'] =  $el[2];
            $arr[] = $buf2;
        }
        return $arr;
    }

    public function __construct($filename)
    {
        parent::__construct($filename);
        while (($data = fgetcsv(self::$myfile, 1000, ",")) !== FALSE)
            self::$list[] = $data;
        $this->fclose();
    }
}
