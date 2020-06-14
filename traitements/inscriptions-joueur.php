

<?php
require_once('../data/fonctions.php');
   /* avatar(); */

    $target= "../public/images/photos/".basename($_FILES['monfichier']['name']);
    $file= $_FILES['monfichier']['name'];
    move_uploaded_file($_FILES['monfichier']['tmp_name'], $target);

    //ENVOI DES DONNEES

    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['login'])
        && isset($_POST['password']) && isset($_FILES['monfichier'])){
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $login= $_POST['login'];
        $password= $_POST['password'];
        $file=$_FILES['monfichier']['name'];

        if (!empty($prenom) && !empty($nom) && !empty($login) && !empty($password)){

            sendDataJoueur($prenom,$nom,$login,$password, $file);

        }

    }

/*$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login=$_POST['login'];
$password=$_POST['password'];
sendDataJoueur($prenom,$nom,$login,$password);*/
?>
