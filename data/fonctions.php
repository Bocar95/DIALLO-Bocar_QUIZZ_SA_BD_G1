<?php

function deconnexion(){
session_start();
    session_destroy();
    header("location:index.php");
    exit;
}

function getConnexion()
 {
    $host= "localhost";
    $username ="root";
    $password = "";
    $database = "initialisation_user_quizz";
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

   // ecriture des parametre
    $req->execute(
       array(
           'login' => $login,
           'password' => $password
        )
    );
    
return $req;
}
?>