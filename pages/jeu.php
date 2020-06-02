<?php
session_start();
if (!isset($_SESSION['login'])){
    header("Location:../index.php");
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
    <a href="../logout.php" class="btn btn-primary">Deconnexion</a>
</body>
</html>