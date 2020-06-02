<?php
session_start();
if (!isset($_SESSION['login'])){
    header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acceuil Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style-acceuil-admin.css">
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="image">
                <img src="../public/images/logos et icones/logo1.png" alt="">
            </div>
            <div class="barre">
                <p>CRÉER ET PARAMÉTRER VOS QUIZZ</p>
                <a href="../logout.php" class="btn btn-primary">Deconnexion</a>
            </div>
        </div>

    </div>
</body>
</html>