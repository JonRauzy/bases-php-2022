<?php

if (isset($_POST['username'], $_POST['password'])) {

    $username = htmlspecialchars(strip_tags(trim($_POST['username'])), ENT_QUOTES);
    $password = htmlspecialchars(strip_tags(trim($_POST['password'])), ENT_QUOTES);
    
        $isconnect = connectUser($db, $username, $password);

    if (is_string($isconnect)) {
        $erreur = $isconnect;
    }

    if ($isconnect == true) {
        header("location: ./");
        exit();
    }
}

require_once '../view/PublicView.php';