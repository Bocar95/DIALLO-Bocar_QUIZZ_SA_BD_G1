<?php

function deconnexion(){
session_start();
    session_destroy();
    header("location:index.php");
    exit;
}

function getConnexion($database = "")
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

    $opdo=getConnexion($database = "initialisation_user_quizz");

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


function sendDataJoueur($prenom,$nom,$login,$password){
    //session_start();
        $objetPdo = getConnexion($database = "inscription_joueur_quizz");
        
        $pdoStat = $objetPdo->prepare("INSERT INTO inscriptions_joueur (id_joueur, prenom, nom, login, password, profil) VALUES (?,?,?,?,?,?)");
        $pdoStat -> execute(array(null, $prenom, $nom, $login, $password, 'joueur'));
}

function sendDataAdmin($prenom,$nom,$login,$password){

try{
    $objetPdo = getConnexion($database = "creer_admin");

    $query = $objetPdo -> prepare("INSERT INTO admin (id_admin, prenom, nom, login, password, photo, profil) VALUES(NULL, :prenom, :nom, :login, :password, :photo, :profil)");
          $query -> bindParam("prenom",$prenom,PDO::PARAM_STR);
            $query -> bindParam("nom",$nom,PDO::PARAM_STR);
            $query -> bindParam("login",$login,PDO::PARAM_STR);
            $query -> bindParam("password",$password,PDO::PARAM_STR);
            $query -> bindParam("photo",'img',PDO::PARAM_STR);            
            $query -> bindParam("profil",'Admin',PDO::PARAM_INT);
            $query -> execute();
             return 1;
       }catch(PDOException $e){
    exit($e -> getMessage());
    }

}



?>