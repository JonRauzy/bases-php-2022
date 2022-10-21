<?php

// appel des dépendances :
require_once "config.php";

// si il existe une variable GET nommée page
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'contact':
            include 'contact.php';
            break;
        case 'accueil':
            include "homepage.php";
            break;
        case 'tarif':
            include "tarif.php";
            break;
        case "photo":
            include "photo.php";
            break;
    }
}else{
    include "homepage.php";
}
