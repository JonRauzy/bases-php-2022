<?php
// debogage de la variable post
$_POST;
var_dump($_POST);

//si il existe la variable $_POST nommé temperature (utilisateur isset) dans notre cas $_POST['temperature'] existe si on a envoyé le formulaire

if (isset($_POST['temperature'])) {
    echo "bite";
}

$temp = (int)$_POST['temperature'];
var_dump($temp);

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
        <input type="number" max="40" min="-30" name="temperature" placeholder="donne la temperature" style="width: 100px;"><br>
        <input type="submit" value="Envoyer" style="width: 75px;">
    </form>
</body>

</html>