<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <h1>Les constantes</h1>
    <p>une constantes et une variable qui ne varie pas lol</p>
    <p>on met define, pis la valeur qu'on met dedans et on met tout en majuscule avec des underscore comme ça on les trouve facilement</p>
    <?php

    define("UNE_CONSTANTE","la valeur de la constante ici, qui est une chaine de caractère"); // si je refais define("UNE_CONSTANTE") plus tard ça me fera un message d'erreur parce que je ne peux pas changer la valeure de la constante, comme son nom l'indique oui
    echo UNE_CONSTANTE;
    echo "<br> UNE CONSTANTE ne sera pas interprété entre guillement double, même entre accolade";
    echo "il faudra utilisé la concatenation pour afficher " . UNE_CONSTANTE . " ! ";

    define("DB_HOST", "local host"); //exemple souvent oui
    define("TABLEAU",['un',
                    'deux',
                    'trois',
                    'quattre',]);


    echo "<br>" . DB_HOST;
    // echo "<br>" . TABLEAU; // ça donne une erreur d'affichage, il faut appeler l'index du tableau si tu veux faire
    echo "<br>" . TABLEAU[0];
    // mais on évite les tableaux parce que y'a moyen de changer les valeurs du tableau quand même mais michael il a oublié comment lol, alors stou
    ?>
</body>

</html>