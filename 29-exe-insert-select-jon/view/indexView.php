<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresses</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <h1>Les adresses mails persos à tout le monde (hyper safe oui)</h1>
    <div class="container">
        <?php
        if (empty($nbAdresses)) :
        ?>
            <h2><?= "Il n'y pas d'adresses dans la base de données" ?></h2>
        <?php elseif ($nbAdresses == 1) : ?>
            <h3><?="il y a $nbAdresses adresse dans la base de données"; ?></h3><br>
        <?php else : ?>
            <h3><?="il y a $nbAdresses adresses dans la base de données"; ?></h3><br>
        <?php endif; ?>

        <?php
        foreach ($resultatAdresses as $adresse) :
        ?>
            <div class="afficheMail">
                <h3><?= $adresse['nomadresses'] ?> : </h3>
                <p><?= $adresse['mailadresses'] ?></p>
            </div>

        <?php
        endforeach;
        ?>


        <form action="../public/index.php" method="POST">
            <input type="text" name="nomadresses" placeholder="donne ton nom">
            <input type="mail" name="mailadresses" placeholder="donne ton adresse mail">
            <input type="submit">
        </form>
    </div>
</body>

</html>