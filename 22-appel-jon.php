<?php
include "22-functions.php";

if(isset($_POST['num1'], $_POST['num2'])){
    $reponse = calculBasic($_POST['num1'], $_POST['num2'], $_POST['op']);
}else{
   $yolo = "met des chiffre dans les trous stp";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body style="background-color:yellow;">
    <div class="explication" style="width:60%;margin:auto; text-align: center;">
        <h1>Test de nos fonctions</h1>
        <h2>Calculatrice</h2>
        <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
        <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
        <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>
    </div>
    <div class="calculette" style="width:fit-content; height: fit-content; padding: 25px; border: solid black 3px; border-radius: 5px; margin: auto;background-color:pink;">
        <form action="" method="POST">
            <input type="text" name="num1" id="num1" placeholder="donne">
            <select name="op" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" id="num2" placeholder="donne afou">
            <input type="submit" value="clic">    
        </form>

        <p style="border:solid black 1px; border-radius: 5px; padding: 5px; width:fit-content; ">
            <?php
            if(isset($reponse)){
                echo $_POST['num1'] . " " . $_POST['op'] . " " . $_POST['num2'] .' = ' . $reponse;
            }else{
                echo $yolo;
            }
                
            
            ?>
        </p>
    </div>

</body>
</html>