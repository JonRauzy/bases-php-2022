<?php

require_once "../config.php";

// try cacth connexion db
try{
    $dbExo = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($dbExo, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}

// connexion sql à la table et tout
$sqlAdresses = "SELECT `nomadresses`, `mailadresses` 
                FROM `adresses` 
                ORDER BY `nomadresses` DESC";
$queryAdresses = mysqli_query($dbExo, $sqlAdresses) or die("Erreur : " . mysqli_error($dbExo));
$nbAdresses = mysqli_num_rows($queryAdresses);
$resultatAdresses = mysqli_fetch_all($queryAdresses, MYSQLI_ASSOC);


if (isset($_POST['nomadresses']) && isset($_POST['mailadresses'])) {
    $nom = $_POST['nomadresses'];
    $mail = $_POST['mailadresses'];
    $sqlInsert = "INSERT INTO `adresses`(`nomadresses`, `mailadresses`) 
                VALUES ('$nom','$mail');";
    mysqli_query($dbExo, $sqlInsert) or die(mysqli_error($dbExo));
    header("location: ./");
}

include_once '../view/indexView.php';

mysqli_free_result($queryAdresses);
mysqli_close($dbExo);