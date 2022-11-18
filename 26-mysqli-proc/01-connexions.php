<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion avec mysqli</h1>
    <h2>Méthode procédural</h2>
    <h3>msqli connect</h3>
    <p>Voir la page sur <a href="https://www.php.net/manual/fr/mysqli.construct.php" target="_blank">php.net</a></p>
    <h4>Connexion</h4>
    <p>comment on test la connexion</p>
        <code>
            <pre>
    On utilise la fonction mysqli_connect comme ça:
    $variable = mysqli_connect("quel hote", "l'utilisateur", "mot de passe", "nom de la base de donnée", "port(int, ex : local = 3306)", "socket(optionnel)");

    Connexion à la DB mysql "statistique"
        $mysqliConnect = mysqli_connect("localhost", "root", "", "statistiques", 3306);
        var_dump($mysqliConnect);
            </pre>
        </code>

    <?php
    // connexion à la DB mysql "statistique"
    $mysqliConnect = mysqli_connect("localhost", "root", "", "statistiques", 3306);
    var_dump($mysqliConnect);    
    ?>

    <h4>Deconnexion</h4>
    <p>Optionel mais doit être mis pour les bonnes pratiques</p>
    <p>en effet en mysql ou en mariaDB les connexions se ferment automatiquement en fin de script. Attention en cas de connexion permanente, il ne faut pas l'utiliser</p>
    <p>Les connexions permanentes sont utilisée sur les gros serveurs ayant les capacités de supporter (et on a gain de vitesse)</p>
    
    <h3>mysqli_close</h3>
    <code>
        <pre>
            mysqli_close($nomDeLaVariable);
        </pre>
    </code>

    <?php
    //deconnexion :
    mysqli_close($mysqliConnect);
    var_dump($mysqliConnect); 
    ?>

</body>
</html>