<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction utilisateur</title>
</head>

<body style="width:60%; margin: auto;">
    <h1>FONCTION UTILISATEUR</h1>
    <p>On peut créer une nouvelle fonction en utilisant le mot clé 'function' suivi d'un nom (utilisation du même nomage que les variables : lowerCamelCase, et sans le $) et de parantèse qui peuvent contenir des arguments/paramètre</p>
    <pre>
        <code>
            function nomDeLaFonction(paramètre, arguments){
                // instruction
                return // résultat
            }
        </code>
    </pre>
    <?php
    // création de la fonction sans arguments, retourne une valeure, ici la day time de l'amérique, avec le return
    function laDate()
    {
        return date("Y-m-d H:i");
    }

    echo laDate();
    echo "<br>";
    ?>
    <?php
    // création de la fonction sans arguments, retourne une valeure, ici la day time de l'amérique, avec le return
    function calcul($num1, $num2, $op = "+")
    {
        if (is_numeric($num1) && is_numeric($num2)) {
            if ($op == "/" && $num2 == 0) {
                return "on divise pas par zéro";
            } else {
                switch ($op) {
                    case "-":
                        return $num1 - $num2;
                    case "*":
                        return $num1 * $num2;
                    case "/":
                        return $num1 / $num2;
                    default:
                        return $num1 + $num2;
                }
            }
        } else {
            return "non";
        }
    }
    echo "<hr>";
    echo calcul(12, 3);
    echo "<hr>";
    echo calcul(12, 3, "-");
    echo "<hr>";
    echo calcul(12, 3, "*");
    echo "<hr>";
    echo calcul(12, 3, "/");
    echo "<hr>";
    echo calcul("toto", "yolo");
    echo "<hr>";
    echo calcul(12, 0, "/");
    echo "<hr>";
    ?>
    <h2>Calculatrice</h2>
    <p>Fais une Calculatrice</p>
    <form action="" method="POST">
        
    </form>
</body>

</html>