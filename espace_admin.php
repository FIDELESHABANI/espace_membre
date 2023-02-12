<?php
    session_start();
    if(!$_SESSION['mdp']){
       // header('Location: connexion.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>BIENVENU A L'ESPACE D'ADMINISTRATION DU SITE</h1>
    <a href="membres.php">Afficher Tous les membres</a> <br>
    <a href="publier_article.php">Publier un Nouvel Article</a><br>
    <a href="afficher_article.php">Afficher Tous les Articles</a>
</body>
</html>