<?php

function encrypt($plaintext, $cipher, $key)
{
    $encryption_key = base64_decode($key);
    $ciphertext = [];
    if (in_array($cipher, openssl_get_cipher_methods())) {
        $ivlen = openssl_cipher_iv_length($cipher);
        $ciphertext["iv"] = openssl_random_pseudo_bytes($ivlen);
        $ciphertext["text"] = openssl_encrypt($plaintext, $cipher, $encryption_key, OPENSSL_ZERO_PADDING, $ciphertext["iv"], $tag);
        $ciphertext["tag"] = $tag;
    }
    return $ciphertext;
}

function writeToFile($ciphertext)
{
    if (!isset($ciphertext)) die("Пустий масив");
    $fileName =  md5($ciphertext["text"]);
    if (!file_exists("data"))
        mkdir("data", 0777, true);

    if (!mkdir("data/$fileName", 0777, true))
        die('не вийшло створити дерикторії');

    file_put_contents("data/$fileName/$fileName.txt", $ciphertext);
    file_put_contents("data/$fileName/iv.txt", $ciphertext["iv"]);
    file_put_contents("data/$fileName/tag.txt", $ciphertext["tag"]);

    return "$fileName";
}

$plaintext = $_POST["text"];
$cipher = "aes-128-gcm";
$key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';


$ciphertext = encrypt($plaintext, $cipher, $key);
$dir = writeToFile($ciphertext);


echo "http://localhost:8080/Homework/Homework8_mod3/encoder.php?hash=$dir";
