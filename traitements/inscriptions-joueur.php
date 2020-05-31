<?php

//connexion a la base de donnees 'inscription_joueur jeu de quizz'

$objetPdo = new PDO ('mysql:host=localhost; dbname =inscription_joueur_quizz', 'root', '');

//preparation de la requete d'insertion SQL

$pdoStat = $objetPdo->prepare('INSERT INTO inscriptions_joueur VALUES (NULL, :prenom, :nom, :login, :password, :profil)');

//on lie chaque marqueur a une valeur

$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$pdoStat->bindValue(':profil', 'joueur', PDO::PARAM_STR);

//execution de la requete

$insertIsOk = $pdoStat->execute();

if ($insertIsOk){
    $message = 'Le joueur est enregistrer';
}else{
    $message = 'joueur non enregistrer';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$message;?></p>
</body>
</html>