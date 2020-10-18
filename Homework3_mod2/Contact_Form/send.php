<?php
$error = false;
$listErrors  = [];


if (isset($_POST["submit"])) {

    foreach ($_POST as $key => $val) {
        if (empty($val)) {
            $listErrors[] = "Empty $key<br>";
            $error = true;
        }
    }

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false && empty($_POST["email"]) == false) {
        $listErrors[] = "Wrong email address<br>";
        $error = true;
    }

    if (!$error) {
        if (!mail($_POST["email"], $_POST["subject"], $_POST["textarea"])) {

            echo error_get_last()['message'];
        }
    } else
        echo "Your message has been sent successfully<br>";
}

include_once __DIR__ . '/view/' . 'master.php';
