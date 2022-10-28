<container>
    <h2>Liste des formateurs WEB</h2>
    <?php
    foreach (FORMATEURS_WEB as $item) :
    ?>
        <ul>
            <li><?= $item[0] ?></li>
            <li><?= $item[1] ?></li>
            <li><?= $item[2] ?></li>
        </ul>
    <?php
    endforeach;
    ?>
</container>

</body>

</html>