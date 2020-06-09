<?php

function deconnexion(){
session_start();
    session_destroy();
    header("location:index.php");
    exit;
}

function getConnexion($database = "initialisation_user_quizz")
 {
    $host= "localhost";
    $username ="root";
    $password = "";
    $objetPDO="";

    try {
        $objetPDO = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
        $objetPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $objetPDO;
     }
     catch(PDOException $error)
     {
        $error->getMessage();
     }
 }


function getUserConnexion($login, $password){
//session_start();

    $opdo=getConnexion();

    // table user
    $sql='SELECT * FROM user WHERE login =:login AND password =:password';
    
    $req=$opdo->prepare($sql);

   // ecriture des parametres
    $req->execute(
       array(
           'login' => $login,
           'password' => $password
        )
    );
    
return $req;
}


function sendData(){
    //session_start();
    
        $objetPdo = getConnexion($database = "inscription_joueur_quizz");
    
        $pdoStat = $objetPdo->prepare("INSERT INTO inscriptions_joueur (id_joueur,prenom, nom, login, password, profil) VALUES (?,?,?,?,?,?)");
        $pdoStat -> execute(array(null, $_POST['prenom'], $_POST['nom'], $_POST['login'], $_POST['password'], 'joueur'));
        var_dump($objetPdo);
}
?>