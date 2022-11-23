<?php
require_once 'config.php';
include 'fonction.php';

    // connexion à la DB mysql "statistique"
    try{
        //conexion
        $mysqliConnect = mysqli_connect(DB_HOST,DB_LOGIN, DB_PWD, DB_NAME, DB_PORT); 
        // on y dit quelle charset on veut (utf8)
        mysqli_set_charset($mysqliConnect, DB_CHARSET); 
    }catch(Exception $e){
        echo utf8_encode($e->getMessage());
    }

        

    // creation d'un variable en string dans lequel on met la requête SQL
    $sql = "SELECT * FROM statistiques ORDER BY `nom` ASC;";

    //execution de la requete avec mysqli_query() en cas d'échec on arrête le script avec die() mais en vrai on tuilise trycatch stou
    $query = mysqli_query($mysqliConnect, $sql) or die("erreur numéro" . mysqli_errno($mysqliConnect) .  " lors de la requête: " . " ".mysqli_error($mysqliConnect) );

    // on verifie combien de resultats on a obtenu avec notre select
    $nbPays = mysqli_num_rows($query); 

    var_dump($mysqliConnect, $sql, $query);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Première requete</h1>
    <p>
        <?php
        echo "<h1>Nombre de pays : $nbPays</h1>"; // afficher la requête
        // tant qu'on a des pays à lister et si on a au moins un pays
        if(empty($nbPays)) : // pas de pays
        ?>

        <h2>zob</h2>

        <?php
        else :
            // tant qu'on a des lignes des résultats, while()
            // mysqli_fetch_assoc() converti lignes après lignes le résultat en tableau associatif
            while($item = mysqli_fetch_assoc($query)) :
                
        ?>
            <h3><?= $item['nom'] ?>- <?= perMillion($item['population']) ?></h3>

        <?php
        endwhile;
        endif;   
        // on met pas d'accolade et on met les messages à afficher hors des balises php comme ça c'est plus facile pour styliser en html/css   
        ?>
       
    </p>

</body>
</html>
<?php
//bonne pratique, fermeture de connexion
mysqli_close($mysqliConnect);