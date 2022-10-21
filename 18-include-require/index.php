<?php
include_once "header.php";

?>

<body>
    <h1>include require</h1>
    <p>include() est une fonction qui permet d'importer n'importe quoi (en général un autre fichier PHP) autant de fois qu'on veut, et sans erreur en cas de grave echec</p>
    <p>La différence entre require et include est la suivante : require arrêtera l’exécution à la ligne dans laquelle l’erreur est produit. include ne s’exécute pas et continuera à s’exécuter quelles que soient les erreurs. Donc, disons que nous utilisons require et qu’il y avait une erreur dans le code. require arrêtera l’exécution et vous ne verrez pas les autres lignes de code. Vous obtiendrez également une erreur indiquant qu’il n’existe aucun fichier ou répertoire de ce type. Pourtant, avec include, supposons que vous ayez l’erreur. include continuera à exécuter le reste du code.</p>
    <h2>include once</h2>
    <p>est une fonction qui pareil mêm une seule fois, l'interet étant d'éviter des chargements multiple non nécessaire.</p>
    <h2>require_once</h2>
    <p>pareil et une seule fois, mais attention : erreur grave et arrêt du scripte en cas d'échec</p>
    <p>fort utile pour les fichiers de configuration </p>


    <?php
    require "config.php";
    require_once "footer.php";
    
    ?>
</body>

</html>