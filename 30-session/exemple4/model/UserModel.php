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

    if (password_verify($userPassword, $recup['password'])){

        $_SESSION = $recup;
        unset($_SESSION['password'], $_SESSION['uniqueid']);
        return true;
         
    }else{
        
        return "login caca!";   
    }

}


// deconnexion :

function disconnect(){
        # destruction des variables de sessions (réinitialisation du tableau $_SESSION)
        $_SESSION = [];

        # suppression du cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    
        # Destruction du fichier lié sur le serveur
        session_destroy();
    
}