<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptographie</title>
</head>

<body>
    <h1>cryptage</h1>
    <h2>NE jamais utiliser un site externe pour crypter les mot de passe</h2>
    <form action="" method="POST" name="pwd">
        <input type="password" name="pass" required><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    var_dump($_POST);
    echo "<br>";
    ?>

    <?php    
    $pwdHash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    echo $pwdHash;
    ?>
</body>

</html>