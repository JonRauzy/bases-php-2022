<?php
require_once 'config.php';
require 'fonction.php';

try {

    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
} catch (Exception $e) {


    echo utf8_encode($e->getMessage());
}

$sql = "SELECT * FROM statistiques ORDER BY `nom` ASC";

$requete = mysqli_query($db,$sql);

$nbPays = mysqli_num_rows($requete);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONNES PRATIQUES</title>
</head>

<body>
    <h1>yanis</h1>
    <?php
    if(isset($nbPays)):   
        while ($item = mysqli_fetch_assoc($requete)) : 
        ?>
            <p><?= $item['nom']?> - <?= perMillion($item['population']) ?></p>
        <?php

    endwhile;
endif;

    ?>
</body>

</html>
