<?php
    # Lancement d'une session
    # Création d'un identifiant de session (phpsessid)
    # stocké dans un fichier texte sur le serveur
    # et d'un cookie sur la machine utilisateur
    # contenant le phpsessid
    session_start();
    
    # si la variable de session 'count' n'existe pas
    if (!isset($_SESSION['count'])) {

        # on l'a créée
        $_SESSION['count'] = 1;

    # sinon
    } else {

        # on l'incrémente
        $_SESSION['count']++;
    }

    if(!isset($_SESSION['arrive'])){

        $_SESSION['arrive'] = date("Y-m-d H:i:s");
    }


    # on l'affiche
    echo $_SESSION['arrive'];
    echo "<br>" . $_SESSION['count'];