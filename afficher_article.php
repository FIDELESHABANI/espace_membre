<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root','');
    if(!$_SESSION['mdp']){
      //  header('Location: connexion.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Tous les Articles</title>
</head>
<body>
    <?php
        $recupArticles=$bdd->query('SELECT*FROM articles');
        while($article =$recupArticles->fetch()){
            ?>
                <div class="article" style="border:1px solid black">
                    <h2> <?=$article['titre']; ?> </h2>
                    
                    <p><?=$article['contenu']; ?></p>
                    <a href="supprimer_article.php?id=<?= $article['id']; ?>">
                    <button style="color:white; background-color:red; margin-bottom:10px;">Supprimer l'article</button>
                    </a>

                    <a href="modifier_article.php?id=<?= $article['id']; ?>">
                    <button style="color:white; background-color:green; margin-bottom:10px;">Modifier l'Article</button>
                    </a>
                </div>
                <br>
            <?php
        }
    ?>
</body>
</html>