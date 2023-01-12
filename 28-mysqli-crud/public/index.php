<?php
require_once '../config.php';


try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
} catch (Exception $e) {
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}


$sql_user = "SELECT * FROM `users`";
$query_user = mysqli_query($db, $sql_user) or die('erreur de problème');
$resultat_user = mysqli_fetch_all($query_user, MYSQLI_ASSOC);


$sql_rubrique = "SELECT * FROM `rubriques`";
$query_rubrique = mysqli_query($db, $sql_rubrique);
$resultat_rubrique = mysqli_fetch_all($query_rubrique, MYSQLI_ASSOC);


$sql_article = "SELECT a.*, u.user_login AS login, u.idusers
                FROM articles a 
                INNER JOIN users u 
                ON a.users_idusers = u.idusers";
$query_article = mysqli_query($db, $sql_article);
$resultat_article = mysqli_fetch_all($query_article, MYSQLI_ASSOC);


$sql_3 = "SELECT a.idarticles, a.art_title, SUBSTR(a.art_text, 1, 240) AS art_text, a.art_date, u.user_login, u.idusers 
        FROM `articles` a
        LEFT JOIN users u
        ON u.idusers = a.users_idusers";
$query_3 = mysqli_query($db, $sql_3);
$resultat_3 = mysqli_fetch_all($query_3, MYSQLI_ASSOC);


var_dump($resultat_3);