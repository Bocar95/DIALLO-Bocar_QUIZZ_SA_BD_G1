<?php
session_start();
 require_once('../data/fonctions.php');


    $login = $_POST["login"];
    $password = $_POST['password'];

    $result=getUserConnexion($login, $password);
     
    $result_array = $result->fetch(PDO::FETCH_ASSOC);

    $count = $result->rowCount();
    if ($count > 0) {
        $_SESSION['login'] = $result_array['login'];
        $_SESSION['prenom'] = $result_array['prenom'];
        $_SESSION['nom'] = $result_array['nom'];
        /*$_SESSION['score'] = $result_array['score'];
        $_SESSION['image'] = $result_array['image'];*/  

        if($result_array !== false){
            if($result_array['profil']=="admin"){
                echo "success_admin";
            }   
            else{
                if ($result_array['profil']=="joueur"){
                    echo "success_joueur";
                }
            }
        }
    }else{
        header('Location:../index.php');
    }
?>