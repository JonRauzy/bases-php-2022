<?php

require_once '../config.php';

try {

    $connectDB = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($connectDB, DB_CHARSET);
} catch (Exception $e) {

    die(utf8_encode($e->getMessage()));
}

if(isset($_POST['titre'],$_POST['texte'])){
    // recup les variables post on les laisse pas trainer là
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];

    // on supprime les tag html. On peut en authorisé ceux qu"on veut entre les ['']
    $titre = strip_tags($titre);
    $texte = strip_tags($texte,['br', 'p']);

    // on supprime les espaces avant et arrière
    $titre = trim($titre);
    $texte = trim($texte);

    // on encode les charactères dangereux restant en entités html
    $titre = htmlspecialchars($titre, ENT_QUOTES); 
    $texte = htmlspecialchars($texte, ENT_QUOTES);


    if(!empty($titre) && !empty($texte)){
        $sql = "INSERT INTO `articles` (`titrearticles`, `textearticles`) VALUES ('$titre', '$texte')" ;
        $query = mysqli_query($connectDB, $sql);
}
}

$sql = "SELECT * FROM `articles` ORDER BY `datearticle` DESC";

$query = mysqli_query($connectDB, $sql) or die("erreur : " . mysqli_error($connectDB));

$nb = mysqli_num_rows($query);

if (empty($nb)) {
    $affiche = "napa d'articles";
} else {
    $datas = mysqli_fetch_all($query, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Nos articles</h1>
    <?php
    if (isset($affiche)) :
    ?>
        <h2><?= $affiche ?></h2>
    <?php
    else :

    ?>
        <h3><?= ($nb < 2) ? "1 article" : "$nb articles" ?></h3>
        <hr>

        <?php

        foreach ($datas as $items) :
        ?>
            <div class="articles">
                <h4><?= $items['idarticles'] ?> - <?= $items['titrearticles'] ?> : </h4>
                <p><?= $items['textearticles'] ?></p>
                <p><?= $items['datearticle'] ?></p>
                <hr>

            </div>
    <?php
        endforeach;
    endif;
    ?>
    <hr>
    <h4>Ecrire un article</h4>
    <form action="" method="POST" name="article">
        <input type="text" name="titre" placeholder="le titre" required><br>
        <textarea name="texte" placeholder="votre texte" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="envoyer">
    </form>
</body>

</html>