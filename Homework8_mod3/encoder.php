<?php


function clear($path)
{
    if (file_exists($path)) {
        $arrDir = scandir($path);
        array_shift($arrDir);
        array_shift($arrDir);
        foreach ($arrDir as $file) {
            unlink($path . '/' . $file);
        }
    }
}



$cipher = "aes-128-gcm";
$key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';
$encryption_key = base64_decode($key);

try {

    if (count($_GET) != 1) throw new Exception("Кількість параметрів повинна бути 1");
    if (array_key_exists('hash', $_GET) === false) throw new Exception("Такого параметра не існує");
    if (!file_exists("data")) throw new Exception("Data не існує");

    $arrDir = scandir("data");
    $key = array_search($_GET["hash"], $arrDir);

    if ($key === false) throw new Exception("{$_GET['hash']} не існує");

    $ciphertext = file_get_contents("data/$arrDir[$key]/$arrDir[$key].txt");
    $iv = file_get_contents("data/$arrDir[$key]/iv.txt");
    $tag = file_get_contents("data/$arrDir[$key]/tag.txt");


    $ciphertext = str_replace($iv, "", $ciphertext);
    $ciphertext = str_replace($tag, "", $ciphertext);

    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $encryption_key, OPENSSL_ZERO_PADDING, $iv, $tag);

    require_once "show.php";

    clear("data/" . $_GET["hash"]);
    rmdir("data/" . $_GET["hash"]);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
