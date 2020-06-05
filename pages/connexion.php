<?php
/*require_once('./data/fonctions.php');
    if (isset($_POST['connexion'])){
        $login=$_POST['login'];
        $pwd=$_POST['password'];
        require_once('./traitements/connexion1.php');

        $result= $result_array['profil'];
        $page=1;
        $msg_erreur="";

        if ($result==""){
            header("Location:./index.php");
        }else{
            header ("location:index.php?lien=".$result."&page=".$page);
        }
    }*/

?>


<style>@import url("public/css/style.css");</style>
        <div class="row">

            <article class="col-md-6">
                <h1>Welcome to the</h1>
                <img src="public/images/logos et icones/logo2.png" alt="">
            </article>

            <article class="col-md-6">
                <form action="./traitements/connexion1.php" method="post" class="form" id="connexion-form">
                    <div class="form-control">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" error="error-1" placeholder="Saisir votre identifiant">
                        <div class="error-form" id="error-1"></div>
                    </div>

                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" error="error-2" placeholder="Saisir votre mot de passe">
                        <div class="error-form" id="error-2"></div>
                    </div>

                    <div class="btn-connexion">
                        <button type="submit" name="connexion" class="btn btn-success" onclick="getFormData();">Connexion</button>
                    </div>

                    <div class="btn-inscription">
                        <p>If you don't have an account...</p>
                        <a href="index.php?action=inscription" class="btn btn-primary">Sign up</a>
                    </div>
                </form>
            </article>

        </div>
    <script src="./public/js/roote.js"></script>
