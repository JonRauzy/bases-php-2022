<?php

session_start();

require_once "../config.php";
require_once "../model/UserModel.php";

// connexion à la db :
try {

    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($db, DB_CHARSET);

} catch (Exception $e) {

    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}


if (isset($_SESSION['monId']) && $_SESSION['monId'] === session_id()) {
    
    require_once '../controller/PrivateController.php';

} else {

    require_once '../controller/PublicController.php';

}

// exemple de verification du mot de passe : 
// $mdp = "lulu27";

// echo $mdpcrypt = password_hash($mdp, PASSWORD_DEFAULT);


// if(password_verify($mdp, $mdpcrypt)){
//     echo "<br>c'est bon";
// }else{
//     echo "<br>c'est pas bon";
// }