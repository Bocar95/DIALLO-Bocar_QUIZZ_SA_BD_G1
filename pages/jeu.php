<?php
//session_start();
if (!isset($_SESSION['login'])){
    header("Location:./index.php");
}
?>

    <a href="./logout.php" class="btn btn-primary">Deconnexion</a>