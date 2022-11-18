<?php

// front controller -> index.php comme dans 99% des cas

require_once "config.php"; // appel des dépendances

// on utiliser in_array() à la place du swith, on vérifie que les noms de pages sont dans l'array NOM_DE_PAGE qui est dans config.php
if(isset($_GET['page'])){
    if(in_array($_GET['page'],NOM_DE_PAGES)){   
        include $_GET['page'].'.php';
    }else{
        include '404.php';
    }
}else{
    include 'home.php';
}
