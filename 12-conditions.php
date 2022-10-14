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

    if(isset($nb) && $nb < 10 && $nb != 10){ //verifie si elle est initialisée
        echo "$nb existe et il est plus petit que 10";
    }else{
        echo "$nb existe et il est plus grand que 10";
    }

    ?>
    <p></p>
</body>
</html>