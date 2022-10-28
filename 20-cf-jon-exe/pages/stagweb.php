<container>
    <h2>Liste Stagiaires WEB</h2>
    <?php
    foreach (STAGIAIRES_WEB as $item) :
    ?>
        <ul>
            <li><?= $item[0] ?></li>
            <li><?= $item[1] ?></li>
        </ul>
    <?php
    endforeach;
    ?>
</container>

</body>

</html>