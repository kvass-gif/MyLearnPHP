 <?php

   require_once __DIR__ . "/init.php";
   require_once __DIR__ . "/func.php";

   $fileNames = getFileNames(MIN_LIMIT, MAX_LIMIT);
   $fileURLs = getURL_OfFiles(LOCALHOST_TO_FILES, $fileNames);
   $iconNames = scandirMod(PATH_TO_ICONS);
   $iconURLs = getURL_OfFiles(LOCALHOST_TO_ICONS, $iconNames);
   $lines = createLink($fileURLs, $iconURLs);

   require_once __DIR__ . "/view.php";
