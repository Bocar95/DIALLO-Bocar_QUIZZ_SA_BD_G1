<?php
require_once('data/fonctions.php');
if (isset($_GET['lien'])){
    if (isset($_GET['statut']) && $_GET['statut']==="logout"){
        deconnexion();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <article class="col-md-6">
                <h1>Welcome to the</h1>
                <img src="public/images/logos et icones/logo2.png" alt="">
            </article>

            <article class="col-md-6">
                <form action="traitements/connexion1.php" method="post" class="form" id="form-connexion">
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
                        <button type="submit" name="connexion" class="btn btn-success">Connexion</button>
                    </div>

                    <div class="btn-inscription">
                        <p>If you don't have an account...</p>
                        <a href="pages/inscription.php" class="btn btn-primary">Sign up</a>
                    </div>
                </form>
            </article>

        </div>
    </div>
</body>
</html>


<script>
    const inputs= document.getElementsByTagName("input");
    for (input of inputs){
        input.addEventListener("keyup",function(e){
           if (e.target.hasAttribute("error")){
               var idDivError=e.target.getAttribute("error");
               document.getElementById(idDivError).innerText=""
           }
        })
    }
    document.getElementById("form-connexion").addEventListener("submit",function(e){
        const inputs= document.getElementsByTagName("input");
        var error=false;
        for (input of inputs){
            if (input.hasAttribute("error")){
                var idDivError=input.getAttribute("error");
            if (!input.value){
                document.getElementById(idDivError).innerText="Ce champ est obligatoire."
                error=true
            }
            
            }
        }

        if(error){
            e.preventDefault();
            return false;
        }
           
    })
</script>