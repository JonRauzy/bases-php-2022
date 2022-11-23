# choix de mysqli

Nous faisons le choix de mysqli procédural pour nos connexions.
Il existe une version mysqli OO (orienté objet) et une autre procédural 

Nous passerons à le OO plus tard et de préférence avec PDO :
https://www.php.net/manual/fr/mysqlinfo.api.choosing.php

### pdo :
    procédural : non
    OO : oui

### msql :
    procédural : oui
    OO : oui

### Création d'un gitignore

On créé un .gitignore pour ne pas envoyer notre fichier config sur githud(pour des raisons évidentes de sécurité)
on fait donc un config.php.creat (ou .init) qui est une copie mais sans les vrais paramètres de connexions

### transtypage

Le transtypage d'un langage permet de transformer à la volée les variables d'un type à l'autre.
Il est activé par défaut en PHP. 

ex:
$i = "5"

// en sql ça marche aussi, sauf pour les limits

    SELECT * FROM statistiques WHERE ID=$i; // fonctionnera
    SELECT * FROM statistiques LIMIT 0, $i; // fonctionne pas
    dans ce cas -> "5"

