<?php

namespace model;

class TxtReader extends AbstractReader implements iReader
{
    protected function transformArray()
    {
        $arr = [];

        foreach (self::$list as $el) {
            $buf = explode(';', $el);
            $buf2['id'] =  trim($buf[0], '"');
            $buf2['domain'] = trim($buf[1], '"');
            $buf2['rank'] =  trim($buf[2], '"');
            $arr[] = $buf2;
        }
        return $arr;
    }

    public function __construct($filename)
    {
        parent::__construct($filename);
        self::$list = preg_split('/\r\n|\r|\n/', fread(self::$myfile, filesize(PATH_TO_DATA . '/' . $filename)));
        $this->fclose();
    }
}
