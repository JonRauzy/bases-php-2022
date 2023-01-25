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
        if (empty($nbAdresses)):
        ?>
            <h2><?= "Il n'y pas d'adresses dans la base de données" ?></h2>
        <?php else : ?>
            <?php if ($nbAdresses == 1) : ?>
                <h3><?= "il y a " . $nbAdresses . "adresse dans la base de données"; ?></h3><br>
            <?php else : ?>
                <h3><?= "il y a " . $nbAdresses . " adresses dans la base de données"; ?></h3><br>
            <?php endif; ?>
            <?php
            foreach ($resultatAdresses as $adresse) :
            ?>
                <div class="afficheMail">
                    <h3><?= $adresse['nomadresses'] ?></h3>
                    <p><?= $adresse['mailadresses'] ?></p>
                </div>

        <?php
            endforeach;
        endif;
        ?>


        <form action="../public/index.php" method="POST">
            <input type="text" name="nomadresses" placeholder="donne ton nom">
            <input type="mail" name="mailadresses" placeholder="donne ton adresse mail">
            <button>send</button>

            <!-- <h3>Remplis le captcha : </h3>
            <p id="captchaOutput"></p>
            <span id="error"><p >AFOU</p></span>
            <input type="text" placeholder="met le captcha là" id="captchaInput">

            <button type="button" id="captchaValidate">Valider</button>
            <button type="button" id="refresh">Refresh</button> -->

            <p><?= $message ?></p>
        </form>
        <script src="../public/js.js"></script>
    </div>
</body>

</html>