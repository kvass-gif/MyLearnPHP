<?php
function moveToData($photo)
{
    $uploadfile = MODEL_PATH . "data\\" . basename($photo['name']);
    move_uploaded_file($photo['tmp_name'], $uploadfile);
}
function cleanData($dir)
{
    $nameFiles = scandir(MODEL_PATH . $dir);
    for ($i = 2; count($nameFiles) > $i; $i++)
        unlink(MODEL_PATH . 'data\\' . $nameFiles[$i]);
}
function convertTo($format, $fileName)
{
    $path = MODEL_PATH_DATA . '\\' . $fileName;

    if ($format == 'jpg') {
        imagejpeg(
            imagecreatefromstring(file_get_contents($path)),
            MODEL_PATH_OUT . '\\' . explode(".", $fileName)[0] . '.jpg'
        );
    } else if ($format == "png") {
        imagepng(
            imagecreatefromstring(file_get_contents($path)),
            MODEL_PATH_OUT . '\\' . explode(".", $fileName)[0] . '.png'
        );
    } else if ($format == "gif") {
        imagegif(
            imagecreatefromstring(file_get_contents($path)),
            MODEL_PATH_OUT . '\\' . explode(".", $fileName)[0] . '.gif'
        );
    }
}

function convertFilter($neededTypes)
{

    $types = ['jpg', 'png', 'gif'];
    $nameFiles = scandir(MODEL_PATH_DATA);
    foreach ($types as $type) {
        if (gettype(array_search($type, $neededTypes)) == 'integer') {

            foreach ($nameFiles as $file) {
                $format = explode(".", $file)[1];
                if ($format != $type && !empty($format)) {
                    convertTo($type, $file);
                }
            }
        }
    }
}

function Send()
{
    $nameFiles = scandir(MODEL_PATH_OUT);
    var_dump($nameFiles);
    foreach ($nameFiles as $file) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
}
