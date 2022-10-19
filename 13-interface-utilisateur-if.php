<?php
// debogage de la variable $_POST

//si il existe la variable $_POST nommé temperature (utilisateur isset) dans notre cas $_POST['temperature'] existe si on a envoyé le formulaire, on vérifie toujours si l'initation avec isset avant le reste, sinon il s'arrête à la première erreur et suivi d'un && pour vérifier l'élément et tout


// on peut faire une méthode permettant de de convertire en int, en cas d'échec renvois false, et true en cas de réussite
$reponse = "<h3>";

if (isset($_POST['temperature']) && is_numeric($_POST['temperature'])) {
    $temp = (int)$_POST['temperature'];
    if ($temp < 0) {
        $reponse .= "il gèle";
    } elseif ($temp < 100) {
        $reponse .= "l'eau elle est liquide";
    } else {
        $reponse .= "l'eau bout";
    }
    $reponse .= "<h3>";
}

// on va créer une nouvelle variable temporaire, là on va l'appeler $temp = (int)$_POST['temperture'], si ça fonctionne ça donne un numérique , en cas d'échec ça nous donne 0
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Températures</title>
</head>

<body>
    <h1>Température</h1>
    <p>Pis y'a aussi les super global variable <a href="https://www.php.net/manual/en/language.variables.superglobals.php" target="_blank">check ici fiss</a> </p>
    <form name="formulaire" action="" method="POST">
        <p>Bonjour qu'elle est la température du dehors</p>
        <input type="number" max="40" min="-30" name="temperature" placeholder="donne la temperature" style="width: 200px; margin-left: 30px;"><br>
        <input type="submit" value="Envoyer" style="width: 200px; margin-top: 5px; margin-left: 30px">
    </form>
    <?php

    // empty() c'est vide? 
    // !empty() c'est pas vide?

    if (isset($reponse) && !empty($reponse)) {
        echo "$reponse";
    }
    ?>
</body>

</html>