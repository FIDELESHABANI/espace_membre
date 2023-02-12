<?php
    $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root','');
    if(isset($_GET['id'])  AND !empty($_GET['id'])){
        $getid=$_GET['id'];
        $recupArticle = $bdd->prepare('SELECT * FROM articles WHERE id=?');
        $recupArticle->execute(array($getid));
        if($recupArticle->rowCount()>0){
            $deleteArticle=$bdd->prepare('DELETE FROM articles where id=?');
            $deleteArticle->execute(array($getid));
            header('Location: afficher_article.php');

        }else{
            echo "Aucun n'article n'a été trouvé";
        }
    }else{
        echo "Aucun n'identifiant a été trouvé";
    }
?>