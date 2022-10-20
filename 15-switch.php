<?php

$a = mt_rand(1, 5);
$nom = null;

switch ($a) {
    case 1:
        $nom = "youssaif";
        break;
    case 2:
        $nom = "bili";
        break;
    case 3:
        $nom = "yannisse";
        break;
    case 4:
        $nom = "pieralin";
        break;
    default:
        $nom = "personne";
}

echo "j'aime $nom !";

?>
<p>L'avantage c'est que ça va plus vite mais il check pas l'égalité strict (===) alors ça peut faire des problèmes exemple si $a = true alors il va réagir au case 1 (parce que true == 1) et il check qu'une variable à la fois</p>

<?php

$b = mt_rand(1, 6);

// si tu veut t'as plusieurs case qui repondent à la condition bah tu les laisse vide :
switch ($b) {
    case 1:  
    case 2:    
    case 3:
        echo "$b c'est un, deux, trois";
        break;
    case 4:
    case 5:
        echo "$b c'est quattre et cinq";
        break;
    default:
        echo "$b c cassé";
}

?>

<?php
echo "<br>";
$temp=mt_rand(-10,10);
if($temp<0){
    echo 'il gèle';
}else{
    echo 'il gèle po';
}
echo "<br>";
echo 'oh no';
?>