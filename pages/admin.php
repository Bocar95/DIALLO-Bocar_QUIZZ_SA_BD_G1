<?php
session_start();
if (isset($_SESSION['login'])){
    echo 'Welcome';
}else{
    header("Location:index.php?");
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
    <a href="../index.php?statut=logout">Deconnexion</a>
</body>
</html>