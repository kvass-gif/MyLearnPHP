<?php

namespace model;

use \Exception;


class Model
{

    private static $Reader;
    private static $arr;
    private static $dinamicArr;
    private static $cUrl;



    private function fileExtension($filename)
    {
        $ext = explode(".", $filename);
        $ext = end($ext);
        return $ext;
    }

    public function __construct($filename)
    {
        $ext = $this->fileExtension($filename);

        if ($ext == 'csv') self::$Reader = new CSVReader($filename);
        else if ($ext == 'txt') self::$Reader = new TxtReader($filename);
        else throw new Exception("File doesn't fits to the object");

        self::$arr =  self::$Reader->getArray();

        array_shift(self::$arr);

        self::$cUrl = new cUrl();
    }

    public function transformArray($toNum)
    {
        $count =  count(self::$arr);
        if ($toNum > $count || $toNum <= 0) throw new Exception("No such amount of data");

        self::$dinamicArr = [];
        for ($i = 0; $toNum > $i; $i++) {
            self::$dinamicArr[$i] = self::$arr[$i];
            self::$cUrl->cheackDomain(self::$dinamicArr[$i]['domain']);
            self::$dinamicArr[$i]['ip'] = self::$cUrl->getIp();
            self::$dinamicArr[$i]['status'] = self::$cUrl->getStatus();
            self::$dinamicArr[$i]['checked'] = self::$cUrl->getChecked();
        }
    }

    public function sortByRank()
    {

        usort(
            self::$arr,
            function ($a, $b) {
                $rankA =  (float)$a['rank'];
                $rankB =  (float)$b['rank'];
                if ($rankA == $rankB) {
                    return 0;
                }
                return ($rankA > $rankB) ? -1 : 1;
            }
        );
    }

    public function getData()
    {
        return self::$dinamicArr;
    }
}
