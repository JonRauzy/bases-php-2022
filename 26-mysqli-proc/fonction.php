<?php

// ressoit un int avec le nombre d'habitant renvois un string avec la convertion on miyion avec 2 chiffre après la virgule 
function perMillion(int $number): string {
    $resultat = number_format($number/1000000, 2, ',', ' ');
    return $resultat >= 2 ? $resultat . "millions" : $resultat . "million";
}