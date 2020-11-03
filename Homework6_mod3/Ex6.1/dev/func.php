<?php
//returns string array of files that cleared of the first two points
function scandirMod($path)
{
    $info_files = scandir($path);
    for ($i = 0; 2 > $i; $i++)
        array_shift($info_files);
    return $info_files;
}

//returns file names of suitable files
function filterBySize($info_files, $minSize, $maxSize)
{
    $suitableFiles = [];
    foreach ($info_files as $value) {
        $size = filesize(PATH_TO_FILES . "\\" . $value);
        if ($size >= $minSize && $size < $maxSize)
            $suitableFiles[] = $value;
    }
    return $suitableFiles;
}

//returns files names 
function getFileNames($minSize, $maxSize)
{
    $info_files = [];
    if (file_exists(PATH_TO_FILES)) {

        $info_files = scandirMod(PATH_TO_FILES);
        $info_files = filterBySize($info_files, $minSize, $maxSize);
    }
    return $info_files;
}

//ret URLs localhost of needed files
function getURL_OfFiles($path, $nameFiles)
{
    $URLs = [];
    foreach ($nameFiles as $name)
        $URLs[$name] = $path . "\\" . $name;

    return $URLs;
}
function getTegA($url, $name)
{
    return "<a href=\"$url\" target=\"_blank\">$name</a>";
}
function getTegImg($url)
{
    return "<img src =\"$url\">";
}

function fileSizeStr($value)
{
    $size = filesize(PATH_TO_FILES . "\\" . $value);
    $decimal = round($size / pow(1024, 2), 2);
    return sprintf("(<b>%.2f</b> mB)", $decimal);
}
function fileChangeTime($name)
{
    return "<b>" . date("d F, Y", filectime(PATH_TO_FILES . "\\" . $name)) . "</b>";
}
function createLink($fileURLs, $iconURLs)
{

    $lines = [];
    foreach ($fileURLs as $name => $url) {

        $formatName = explode('.', $name);
        $formatName = array_pop($formatName);

        $isExistIcon = array_key_exists("$formatName.png", $iconURLs) ? "$formatName.png" : "no-pict.png";
        $lines[$name] = "";
        $lines[$name] .= getTegImg($iconURLs[$isExistIcon]);

        $lines[$name] .= " " . getTegA($url, $name);
        $lines[$name] .= " " . "<span class = \"size\">." . fileSizeStr($name) . "</span>";
        $lines[$name] .= "<span class = \"date\">, last modified at: " . fileChangeTime($name) . "</span>";
    }
    return $lines;
}
