<?php

// ici je met mes liste de fonctions qui seront utiles dans le site que je peux appeler plusieurs fois avec des include


function chiffration($num1, $num2, $op = "+")
{
    $possible = ["+", "-", "*", "/"];
    if (!in_array($op, $possible)) {
        return "nique toi";
    } else { {
            // on inverse la condition avec !, attention le && devient ||
            if (!is_numeric($num1) || !is_numeric($num2)) {
                return "Attention, les 2 premiers paramètres doivent être numériques";
            }
            switch ($op) {
                case "*":
                    return $num1 * $num2; // le return arrête la fonction et renvoie le résultat
                case "-":
                    return $num1 - $num2;
                case "/":
                    // si division par 0 affichage de l'erreur et arrêt du script
                    if ($num2 == 0) return "Division par 0 interdite";
                    return $num1 / $num2;
                default:
                    return $num1 + $num2;
            }
        }
    }
}
