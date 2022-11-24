<?php
require_once 'config.php';

try {
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);
} catch (Exception $e) {

    exit(utf8_encode($e->getMessage()));
}

$sql = "SELECT * FROM statistiques ORDER BY nom ASC";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONNES PRATIQUES</title>
</head>

<body>
    <h1>suce pipi</h1>

    <?php
    mysqli_close($db)
    ?>
</body>

</html>