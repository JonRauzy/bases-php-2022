<?php

require_once '../config.php';

try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
}catch(Exception $e){
    exit(utf8_encode($e->getMessage()));
}


$sql_article = "SELECT * FROM `articles`";
$query_article = mysqli_query($db, $sql_article);
$resultat_article = mysqli_fetch_all($query_article, MYSQLI_ASSOC);

$sql_user = "SELECT * FROM `users`";
$query_user = mysqli_query($db, $sql_user);
$resultat_user = mysqli_fetch_all($query_user, MYSQLI_ASSOC);

$sql_rubrique = "SELECT * FROM `rubriques`";
$query_rubrique = mysqli_query($db, $sql_rubrique);
$resultat_rubrique = mysqli_fetch_all($query_rubrique, MYSQLI_ASSOC);

var_dump($resultat_article, $resultat_user, $resultat_rubrique);