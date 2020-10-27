<?php


require_once "funcValidation.php";
require_once MODEL_PATH . "mod.php";


if (isset($_POST["but1"])) {

    $arrPhoto = getArrPhoto();

    if (!isset($_POST['target']))
        $arrayErrors[] = "No target";

    foreach ($arrPhoto as $photo) {

        if ($photo['error'] !== UPLOAD_ERR_OK) {
            $arrayErrors[] =  returnError($photo['error']);
            break;
        }

        fileSizeCompa($photo, $arrayErrors, MAX_FILESIZE);

        if (formatFind(!$photo['type'], $availableFormats))
            $arrayErrors[] = $photo['name'] . " - the wrong format";

        if (count($arrayErrors) == 0)
            moveToData($photo);
    }


    if (count($arrayErrors) == 0) {
        echo "ho";
        convertFilter($_POST['target']);

        Send();
        cleanData('data');
        cleanData('outsource');
        exit;
    }
}
