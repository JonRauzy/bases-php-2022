<?php

// front controller -> index.php comme dans 99% des cas

require_once "config.php"; // appel des dépendances

if(isset($_GET['page'])){
    if(in_array($_GET['page'],NOM_DE_PAGES)){   
        include $_GET['page'].'.php';
    }else{
        include '404.php';
    }
}else{
    include 'home.php';
}
