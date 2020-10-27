<?php

function getArrPhoto()
{
    $globalF = ['type' => 'anytype'];
    $globalF = $_FILES['photo'];
    $countPhoto = count($globalF["name"]);
    $arrPhoto = [];

    for ($i = 0; $countPhoto > $i; $i++) {
        $arrPhoto[] = [
            "name" => $globalF["name"][$i],
            "type" => explode('/',  $globalF["type"][$i])[1],
            "tmp_name" => $globalF["tmp_name"][$i],
            "error" => $globalF["error"][$i],
            "size" => $globalF["size"][$i]
        ];
    };
    return $arrPhoto;
}

function returnError($codeEror)
{
    switch ($codeEror) {
        case UPLOAD_ERR_INI_SIZE:
            $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
            break;
        case UPLOAD_ERR_PARTIAL:
            $message = "The uploaded file was only partially uploaded";
            break;
        case UPLOAD_ERR_NO_FILE:
            $message = "No file was uploaded";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $message = "Missing a temporary folder";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $message = "Failed to write file to disk";
            break;
        case UPLOAD_ERR_EXTENSION:
            $message = "File upload stopped by extension";
            break;

        default:
            $message = "Unknown upload error";
            break;
    }
    return $message;
}

function fileSizeCompa($obj, &$arrayErrors, $maxSize)
{
    if ($obj['size'] > $maxSize)
        $arrayErrors[] = $obj['name'] . " - bigger than 15Mb";
}
function formatFind($strFormat, $availableFormats)
{
    $key = array_search($strFormat, $availableFormats);
    return ($key != null) ? true : false;
}
