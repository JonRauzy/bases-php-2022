<?php

if (isset($_POST['username'], $_POST['pwd'])) {

    $username = htmlspecialchars(strip_tags(trim($_POST['username'])), ENT_QUOTES);
    $pwd = htmlspecialchars(strip_tags(trim($_POST['pwd'])), ENT_QUOTES);
    +
        $isconnect = connectUser($db, $username, $pwd);

    if (is_string($isconnect)) {
        $erreur = $isconnect;
    }

    if ($isconnect == true) {
        header("location: ./");
        exit();
    }
}

require_once '../view/PublicView.php';