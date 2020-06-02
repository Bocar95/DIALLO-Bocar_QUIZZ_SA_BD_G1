<?php

//connexion a la base de donnees 'inscription_joueur jeu de quizz'

    $objetPdo = new PDO ('mysql:host=localhost; dbname=inscription_joueur_quizz', 'root', '');
    $pdoStat = $objetPdo->prepare("INSERT INTO inscriptions_joueur (id_joueur,prenom, nom, login, password, profil) VALUES (?,?,?,?,?,?)");
    $pdoStat -> execute(array(null, $_POST['prenom'], $_POST['nom'], $_POST['login'], $_POST['password'], 'joueur'));
    var_dump($objetPdo);
?>
