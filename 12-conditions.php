<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h2>if</h2>
    <p>tsais comment</p>
    <?php
    $nb = mt_rand(0,20);
    if($nb > 10){
        echo "$nb est plus grand que 10";
    }else{
        echo "$nb est plus petit que 10";
    }
    echo "<p>if(isset)</p>";

    if(isset($nb) && $nb < 10 && $nb != 10){ // isset() verifie si la variable est initialisée
        echo "$nb existe et il est plus petit que 10";
    }else{
        echo "$nb existe et il est plus grand que 10";
    }

    ?>
    <p>les conditions peuvent être moulte complexe oui <a href="https://www.php.net/manual/en/language.operators.logical.php"> check ici fiss</a></p>
    <h2>else : SINON</h2>
    <p>ça execute le code si le if qui précéde est false</p>
    <?php
    $temp = mt_rand(-20, 30);
    echo "<h4>Il fait $temp degres</h4>";

    if($temp <= 0){
        echo "y gele";
    }else{
        echo "y gele po";
    }

    echo "<h2>Sinon si - ifelse</h2><br>";
    echo "<p>tu execute une verification supplémentaire si le if et false (ou un autre elsif)</p>";

    $temp = mt_rand(-20, 30);
    echo "<h4>Il fait $temp degres</h4>";

    if($temp <= -10){
        echo "y caille! ";
    }elseif($temp <= 0){
        echo "y gele!  ";
    }elseif($temp <= 8){
        echo "y fe froid! ";
    }elseif($temp <= 12){
        echo "y fe tiede! ";
    }elseif($temp <= 20){
        echo "y fa bon! ";
    }else{
        echo "y fa chaud! ";
    }    

    
    ?>


</body>
</html>