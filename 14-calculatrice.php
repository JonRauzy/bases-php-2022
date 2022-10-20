<?php

if (isset($_POST['first'], $_POST['choix'], $_POST['second']) && is_numeric($_POST['first']) && is_numeric($_POST['second'])) {
    // conversion des variables en chiffre à décimale avec (float) car $_POST['patate'] renvois un string
    $calcul1 = $_POST['first'];
    $calcul2 = $_POST['second'];
    if ($_POST['choix'] === 'division' && $calcul2 == 0) {
        $reponse = "impossible de diviser par zéro!";
    } elseif ($_POST['choix'] === 'addition') {
        $reponse = $calcul1 + $calcul2;
    } elseif ($_POST['choix'] === 'soustraction') {
        $reponse = $calcul1 - $calcul2;
    } elseif ($_POST['choix'] === 'multiplication') {
        $reponse = $calcul1 * $calcul2;
    } elseif ($_POST['choix'] === 'division') {
        $reponse = $calcul1 / $calcul2;
    }
} else {
    $reponse = "On a besoin de 2 valeurs numériques pour pouvoir les calculer";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <style>
        h1,
        p,
        h2 {
            text-align: center;
        }

        form {
            margin: auto;
        }
    </style>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Bienvenu dans la calculatrice, mets des chiffres, choisi un opérature et bim la réponse wesh t'es content?</p>
    <div class="yo">
        <form action="" name="calcul" method="POST">
            <input type="text" name="first" />
            <select name="choix">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
            <input type="text" name="second" />
            <input type="submit" value="Calculer" />
        </form>
    </div>

    <?php
    if (isset($reponse)) :
        echo $reponse;
    endif;
    ?>

</body>

</html>