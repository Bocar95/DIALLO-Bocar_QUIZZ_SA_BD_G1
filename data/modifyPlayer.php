<?php
require_once "fonctions.php";
$objetPdo = getConnexion($database = "bocar_inscription_joueur_quizz");

if (isset($_POST['firstname']) and isset($_POST['lastname'])){
    $num= $_POST['idu'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    if (!empty($firstname)and !empty($lastname)){
        $req=$objetPdo->query("UPDATE `inscriptions_joueur` set `inscriptions_joueur`.`prenom`=`$firstname` , `inscriptions_joueur`.`nom`=`$lastname`
                                WHERE `inscriptions_joueur`.`id_joueur`='$num'");
    }
    if ($req->rowCount()>0){
        echo 'ok';
    }
}

