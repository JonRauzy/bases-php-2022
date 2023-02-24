<?php

// connexion user :
function connectUser(mysqli $myDB, string $userLogin, string $userPassword):string|bool {

    $userLogin = mysqli_real_escape_string($myDB, $userLogin);

    $sql = "SELECT * FROM user WHERE username = '$userLogin';";

    try {

        $query = mysqli_query($myDB, $sql);

    } catch (Exception $e) {

        return $e->getMessage();
    }

    if (mysqli_num_rows($query) === 0)
        return "Login caca!";

    $recup = mysqli_fetch_assoc($query);

    if (password_verify($userPassword, $recup['pwd'])){

        $_SESSION = $recup;
        unset($_SESSION['pwd'], $_SESSION['uniqueid']);
        return true;
         
    }else{
        
        return "login caca!";   
    }

}


// deconnexion :