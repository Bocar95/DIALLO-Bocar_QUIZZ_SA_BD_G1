<?php
session_start();
if (!isset($_SESSION['login'])){
    header("Location:../index.php");
}
?>

    <style>@import url("../public/css/style-acceuil-admin.css");</style>
        <div class="row">

            <article class="col-md">
                <div class="menu-liste-questions">
                    <span class="cadre-couleur-1">
                    </span>
                    <a href="admin.php?lien=liste-questions" class="cadre-lien-image">
                        <p>Liste Questions</p>
                        <img src="../public/images/logos et icones/ic-liste-active.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="menu-creer-admin">
                    <span class="cadre-couleur-2">
                    </span>
                    <a href="admin.php?lien=creer-admin" class="cadre-lien-image">
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
                    <a href="admin.php?lien=liste-joueurs" class="cadre-lien-image">
                        <p>Liste Joueurs</p>
                        <img src="../public/images/logos et icones/ic-liste.png" alt="">
                    </a>
                </div>
            </article>

            <article class="col-md">
                <div class="menu-creer-questions">
                    <span class="cadre-couleur-4">
                    </span>
                    <a href="admin.php?lien=creer-questions" class="cadre-lien-image">
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

            <div class="row">
                <div class="texte">

                </div>

                <div class="ligne">
                    <hr>
                </div>
            </div>

            <div class="row">
                <?php
                if (isset($_GET['lien'])){
                    switch($_GET['lien']){
                            case "liste-questions":
                                require_once("liste-questions.php");
                            break;
                            case "creer-admin":
                                require_once("creer-admin.php");
                            break;
                            case "liste-joueurs":
                                require_once("liste-joueurs.php");
                            break;
                            case "creer-questions":
                                require_once("creer-questions.php");
                            break;
                            default;
                        }
                }
                ?>
            </div>

        </div>