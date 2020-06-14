

<?php
require_once('../data/fonctions.php');

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login=$_POST['login'];
$password=$_POST['password'];
sendDataAdmin($prenom,$nom,$login,$password);
?>
