<?php
session_start();
// ICI LA CONNEXION EST FAITE EN INITIANT DEUX USER DANS UNE BASE DE DONNEES POUR FAIRE LES REDIRECTIONS.

$host= "localhost";
$username ="root";
$password = "";
$database = "initialisation_user_quizz";

try {
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['login'])){
        if (empty($_POST['password'])){
            //
        }
        else {
            $query = 'SELECT * FROM user WHERE login = :login AND password = :password';
            $statement = $connect->prepare($query);
            $statement->execute(

                array(
                    'login' => $_POST['login'],
                    'password' => $_POST['password']
                )
            );

            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];

                if ($_SESSION['login']==="admin" && $_SESSION['password']==="admin"){
                    header("location:../pages/admin.php");
                }else {
                    if ($_SESSION['login']==="joueur" && $_SESSION['password']==="joueur"){
                        header("location:../pages/jeu.php");
                    }
                }   
            }else{
                header("location:../index.php");
            }

        }
    }

}
    catch(PDOException $error){
        $message = $error->getMessage();
    }


?>