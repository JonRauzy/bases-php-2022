<?php

require_once '../config.php';

try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
}catch(Exception $e){
    exit(utf8_encode($e->getMessage()));
}

// création d'une requête pour la page d'accueil qui va ramener tous les champs de la table `articles`, avec `articles`.`art_text` coupé à 250 caractères, ainsi que le `users`.`user_login` et `users`.`idusers` correspondant

$sql_article = "SELECT LEFT(articles.art_text, 250), articles.art_title, users.user_login, users.idusers FROM articles JOIN users ON articles.users_idusers = users.idusers";
$query_article = mysqli_query($db, $sql_article);
$resultat_article = mysqli_fetch_all($query_article, MYSQLI_ASSOC);

// $sql_user = "SELECT * FROM `users`";
// $query_user = mysqli_query($db, $sql_user);
// $resultat_user = mysqli_fetch_all($query_user, MYSQLI_ASSOC);

// $sql_rubrique = "SELECT * FROM `rubriques`";
// $query_rubrique = mysqli_query($db, $sql_rubrique);
// $resultat_rubrique = mysqli_fetch_all($query_rubrique, MYSQLI_ASSOC);

var_dump($resultat_article);