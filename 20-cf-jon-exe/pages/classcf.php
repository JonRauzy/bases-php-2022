<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil 20</title>
    <link rel="stylesheet" href="css/myCSS.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <container>
        <h2>Liste des Classes du CF2m</h2>
        <?php
        foreach (CLASS_CF2M as $item):
        ?>
        <ul>
            <li>
                <?= $item ?>
            </li>
        </ul>
        <?php
        endforeach;
        ?>
    </container>
    <?php include 'footer.php' ?>
</body>

</html>