<?php

function deconnexion(){
session_start();
    session_destroy();
    header("location:index.php");
    exit;
}

function getConnexion($database = "")
 {
    $host= "mysql-bocar.alwaysdata.net";
    $username ="bocar";
    $password = "KUdjbG@smQ8wSUR";
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

    $opdo=getConnexion($database = "bocar_initialisation_user_quizz");

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


/*function sendDataJoueur($prenom,$nom,$login,$password){
    //session_start();
        $objetPdoJoueur = getConnexion($database = "inscription_joueur_quizz");
        
        $pdoStat = $objetPdoJoueur->prepare("INSERT INTO inscriptions_joueur (id_joueur, prenom, nom, login, password, profil) VALUES (?,?,?,?,?,?)");
        $pdoStat -> execute(array(null, $prenom, $nom, $login, $password, 'joueur'));
}*/

function sendDataJoueur($prenom,$nom,$login,$password, $file){
    //session_start();
    $objetPdoJoueur = getConnexion($database = "bocar_inscription_joueur_quizz");

    $response= $objetPdoJoueur->prepare('INSERT INTO `inscriptions_joueur` (`id_joueur`, `prenom`, `nom`, `login`, `password`, `photo`, `profil`) VALUES (NULL, :prenom, :nom, :login, :password, :photo, :profil)');
    $response->execute(array(
        'prenom'=>$prenom,
        'nom'=>$nom,
        'login'=>$login,
        'password'=>$password,
        'photo'=>$file,
        'profil'=>"joueur"
    ));
    if($response->rowCount() > 0){
        header("location: ../index.php");
    }else {
        echo "nok";
    }
    $response->closeCursor();
}

/*function sendDataAdmin($prenom,$nom,$login,$password){

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

}*/

function sendDataAdmin($prenom,$nom,$login,$password,$file){
    //session_start();
    $objetPdoAdmin = getConnexion($database = "bocar_creer_admin_quizz");

    $response= $objetPdoAdmin->prepare('INSERT INTO `admin` (`id_admin`, `prenom`, `nom`, `login`, `password`, `photo`, `profil`) VALUES (NULL, :prenom, :nom, :login, :password, :photo, :profil)');
    $response->execute(array(
        'prenom'=>$prenom,
        'nom'=>$nom,
        'login'=>$login,
        'password'=>$password,
        'photo'=>$file,
        'profil'=>"admin"
    ));
    if($response->rowCount() > 0){
        header("location: ../index.php");
    }else {
        echo "nok";
    }
    $response->closeCursor();
}



?>