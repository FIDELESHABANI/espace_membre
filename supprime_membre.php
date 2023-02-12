<?php
    $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root','');
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        $getid=$_GET['id'];
        $recupUser = $bdd->prepare('SELECT*FROM membres Where id=?');
        $recupUser->execute(array($getid));
        if($recupUser->rowcount()>0){
            $supprimerUser=$bdd->prepare('DELETE FROM membres Where id=?');
            $supprimerUser->execute(array($getid));
            header('Location: membres.php');
        }else
        {
            echo "Aucun membre n'a été trouvé";
        }
    } else{
        echo"l'identifiant n'a pas été recuperé!";
    }
?>