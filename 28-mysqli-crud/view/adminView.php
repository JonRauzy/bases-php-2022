<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin article cul</title>
</head>
<body>
    <h1>Article : <?=$resultatArticles['art_title']?></h1>
    <?php include 'include/menu.php'; ?>
    
    
    <div class="article">
        <form action="insertArticle" method="POST" action="">
            <input type="text" name="art_title" placeholder="votre titre" required>
            <textarea name="art_text" placeholder="votre article" cols="30" rows="10"></textarea>
            <button>envoyer</button>

        </form>


    </div>

</body>
</html>