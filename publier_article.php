<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root','');
    if(!$_SESSION['mdp']){
      //  header('Location: connexion.php');
    }

    if(isset($_POST['envoie'])){
        if(!empty($_POST['titre']) AND !empty($_POST['contenu'])){
            $titre=htmlspecialchars($_POST['titre']);
            $contenu=nl2br(htmlspecialchars($_POST['contenu']));
            $insererArticle=$bdd->prepare('INSERT INTO articles(titre, contenu)VALUES(?,?)');
            $insererArticle->execute(array($titre,$contenu));

            echo "L'article a bien été envoyé";
        } else{
            echo "Veuillez completer tous les champs...";
        }
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Publier un Article</title>
 </head>
 <body>
     <form method="POST" action="">
     <label for="titre">Titre de l'Article</label>
        <input type="text" name="titre">
        <br><br>
        <label for="contenu">Description</label>
        <textarea name="contenu"></textarea>
        <br>
        <input type="submit" name="envoie">
     </form>
 </body>
 </html>