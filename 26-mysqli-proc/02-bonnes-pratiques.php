<?php
// là oui hein
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnes pratiques</title>
</head>

<body>
    <h1>Bonnes Pratiques</h1>
    <p>Mysqli et try catch</p>
    <code>
        <pre>
    try{
        $mysqliConnect = mysqli_connect(les constantes qu'on a défini dans config.php) 
}catch(Exception $e){
    echo $e->getMessage();
}
            
        </pre>
    </code>

    <?php
    // connexion à la DB mysql "statistique"
    try {
        //conexion
        $mysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
        // on y dit quelle charset on veut (utf8)
        mysqli_set_charset($mysqliConnect, DB_CHARSET);
    } catch (Exception $e) {
        echo utf8_encode($e->getMessage());
    }

    ?>

</body>

</html>