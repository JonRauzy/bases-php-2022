<?php
require "18-header.php";
?>

<body>
    <h1>include require</h1>
    <p>include() est une fonction qui permet d'importer n'importe quoi (en général un autre fichier PHP) autant de fois qu'on veut, et sans erreur en cas de grave echec</p>
    <p>La différence entre require et include est la suivante : require arrêtera l’exécution à la ligne dans laquelle l’erreur est produit.
        include ne s’exécute pas et continuera à s’exécuter quelles que soient les erreurs. Donc, disons que nous utilisons require et qu’il y avait une erreur dans le code. require arrêtera l’exécution et vous ne verrez pas les autres lignes de code. Vous obtiendrez également une erreur indiquant qu’il n’existe aucun fichier ou répertoire de ce type. Pourtant, avec include, supposons que vous ayez l’erreur. include continuera à exécuter le reste du code.</p>


    <?php
    require "18-footer.php";
    ?>
</body>

</html>