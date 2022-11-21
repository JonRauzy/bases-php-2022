<?php

// ressoit un int avec le nombre d'habitant renvois un string avec la convertion on miyion avec 2 chiffre après la virgule 
function argent(int $nb) : string {
    $resultat = number_format($nb/1000000, 2, ',', ' ') . "millions";
    return (string)$resultat;
}

echo argent(2333444);