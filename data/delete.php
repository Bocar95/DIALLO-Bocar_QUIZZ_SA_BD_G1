<?php        
    require_once "fonctions.php";
    $objetPdo = getConnexion($database = "inscription_joueur_quizz");

    $numplayer=$_POST['id_joueur'];
    $req=$objetPdo->query("DELETE FROM `inscriptions_joueur` WHERE `inscriptions_joueur`.`id_joueur`='$numplayer'");
    if ($req->rowCount()>0){
        echo 'ok';
    }
?>