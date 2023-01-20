<?php

require_once "../config.php";
include "../view/indexView.php";

// try cacth connexion db
try{
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}

// connexion sql à la table et tout


// query


// nb d'adresse


// mysqli assoc

// var_dump