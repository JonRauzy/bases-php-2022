<?php
require_once '../config.php';

try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
} catch (Exception $e) {
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}


if(!isset($_GET['section']) or !isset($_GET['article']) or !isset($_GET['auteur'])){

    $sql = "SELECT a.idarticles, a.art_title, 
        SUBSTR(a.art_text, 1, 111) AS rt_text, 
        a.art_date, u.user_login, u.idusers, r.idrubriques, 
        GROUP_CONCAT(r.idrubriques) AS idrubriques,
        GROUP_CONCAT(r.rub_title SEPARATOR '|||') AS rub_title
        FROM `articles` a   
        INNER JOIN users u
        ON u.idusers = a.users_idusers
        LEFT JOIN articles_has_rubriques ahr
        ON ahr.articles_idarticles = a.idarticles
        LEFT JOIN  rubriques r
        ON ahr.rubriques_idrubriques = r.idrubriques
        GROUP BY a.idarticles
        ";

    $query = mysqli_query($db, $sql) or die('erreur');
    $nb_articles = mysqli_num_rows($query);
    $resultat = mysqli_fetch_all($query, MYSQLI_ASSOC);
    var_dump($resultat);

    include_once '../view/homepageView.php';

}