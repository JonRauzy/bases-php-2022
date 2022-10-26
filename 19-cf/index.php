<?php

// appel des dépendances : si config.php contient des constantes, on ne peut afficher le site si que si on arrive à les charger et on ne peut le charger qu'une fois (require_once), sinon on aura des erreurs de redéfinitions de constantes 
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
