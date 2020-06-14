<?php
session_start();
if (!isset($_SESSION['login'])){
    header("Location:./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style-acceuil-admin.css">
</head>
<body>

<div class="container-fluid" id="container-fluid">

        <div class="row">

            <article class="col-md">
                <div class="menu-liste-questions">
                    <span class="cadre-couleur-1">
                    </span>
                    <a href="#1" class="cadre-lien-image" id="link_liste_Questions">
                        <p>Liste Questions</p>
                        <img src="../public/images/logos et icones/ic-liste-active.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="menu-creer-admin">
                    <span class="cadre-couleur-2">
                    </span>
                    <a href="#2" class="cadre-lien-image" id="link_creer_admin">
                        <p>Creer Admin</p>
                        <img src="../public/images/logos et icones/ic-ajout-active.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="image">
                    <img src="../public/images/logos et icones/logo1.png" alt="">
                </div>
            </article>
            

            <article class="col-md">
                <div class="menu-liste-joueurs">
                    <span class="cadre-couleur-3">
                    </span>
                    <a href="#3" class="cadre-lien-image" id="link_liste_joueurs">
                        <p>Liste Joueurs</p>
                        <img src="../public/images/logos et icones/ic-liste.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="menu-creer-questions">
                    <span class="cadre-couleur-4">
                    </span>
                    <a href="#4" class="cadre-lien-image" id="link_creer_Questions">
                        <p>Creer Questions</p>
                        <img src="../public/images/logos et icones/ic-ajout.png" alt="">
                    </a>
                </div>
            </article>
        </div>

        <div class="row">
            <div class="image-identifiant">
                <img src="../public/images/logos et icones/7.jpg" id="im" class="image-ronde-avatar">
                <div class="prenom-nom">
                    <?php
                        echo $_SESSION['prenom'].' ';
                        echo $_SESSION['nom'];
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="barre">
                <p>CRÉER ET PARAMÉTRER VOS QUIZZ <a href="../logout.php" class="btn btn-primary">Deconnexion</a> </p>
            </div>
        </div>

        <div class="container">

            <div class="row" id="row">
                <!--ON AFFICHERA LES DIFFERENTES PAGES ICI-->
            </div>

        </div>
    </div>

    <script src="../public/js/jquery.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../public/js/link_menu_admin.js"></script>


</body>
</html>