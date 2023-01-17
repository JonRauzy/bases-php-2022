# 28 - mysqli - crud

## Installation

1) Ouvrez PHPMyAdmin et choisissez MariaDB
2) Importez `datas/export-22-12-19.sql` à la base de votre serveur.
3) Ouvrez `config.php.ini` et enregistrez le sous le nom de `config.php`.
4) Vérifiez vos paramètres de connexion.

## Structure

### controleur frontale : 

        /public/index.php

dans `public` se trouveront :

-index.php
-les dossiers visibles pour l'utilisateur 
(front-end) : `.css`, `img`, `js`

### les vues (view) :

        /view/404view.php
        /view/detailView.php
        /homepageView.php

Elles se trouvent dans un dossier non accéssible pour les utilisateur,
Ce sont les controleurs, via le controleur frontale qui les appellera.

