<?php

/*

chargement des dépendances

*/

require_once "../config.php";

/*

 connexion à la DB

 */

// essai
try{
    // connexion - $db est donc une instance d'un objet mysqli
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    //var_dump($db);
    // mise à jour du charset
    mysqli_set_charset($db, DB_CHARSET);
    // erreur ($e est une instance de la classe Exception qui contient l'exception)
}catch(Exception $e){
    // affichage de l'erreur et arrêt du script
    // version avant PHP 8.2, est dépréciée car elle ne dit pas de quel format on part pour encoder en utf8, une nouvelle fonction est créée pour le français : iso8859_1_to_utf8($string); ! ne fonctionnera qu'à partir de PHP 8.2
    // exit(utf8_encode($e->getMessage()));
    // pour le moment on utilise une bibliothèque intégrée pour faire la même chose (conversion de ISO-8859-1 vers utf8)
    exit(mb_convert_encoding($e->getMessage(),'UTF-8','ISO-8859-1'));
}

/*

Router


 */

// si on est sur la page d'accueil
// si il n'existe pas de variable get nommée section ou de variable get nommée article ou de variable get nommée auteur
if(!isset($_GET['section']) && !isset($_GET['article']) && !isset($_GET['auteur'])){
    
    include_once '../controller/homepageController.php';

    // appel de la vue
    include_once '../view/homepageView.php';

// Si on est sur le détail d'un article (existence de la variable get article et qu'elle ne contient que du numérique entier non signé)
}elseif(isset($_GET['article']) && ctype_digit($_GET['article'])){

    include_once '../controller/detailController.php';
    
    if ($nbArticles!==0) {
            // appel de la vue
            include_once '../view/detailView.php';
            // sinon
        }else{
            // Erreur plus d'article
            $error = "Cet article n'existe plus";
            // on appel l'erreur 404
            include_once '../view/404View.php';
            }
        }



if(isset($_POST['art_title'],$_POST['art_text'])){
    $title = htmlspecialchars(strip_tags((trim($_POST['art_title']))),ENT_QUOTES);
    $text = htmlspecialchars(strip_tags((trim($_POST['art_title']))),ENT_QUOTES);

    if(!empty($titre) && !empty($text)){
        $sql = "INSERT INTO articles (art_title,art_text) VALUES ('$title', '$text');";
        mysqli_connect($db, $sql) or die (mysqli_error($db));
        header("location: ./");
    }
}