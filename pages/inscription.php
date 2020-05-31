<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style-inscription.css">
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="image">
                <img src="../public/images/logos et icones/logo1.png" alt="">
            </div>
            <div class="barre">
                <p>INSCRIVEZ-VOUS POUR JOUER</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <article class="col-md-6">
                    <form action="../traitements/inscriptions-joueur.php" method="POST" class="form" id="form-inscription">

                        <div class="form-control">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" error="error-1" placeholder="Saisir votre prenom">
                            <div class="error-form" id="error-1"></div>
                        </div>

                        <div class="form-control">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" error="error-2" placeholder="Saisir votre nom">
                            <div class="error-form" id="error-2"></div>
                        </div>

                        <div class="form-control">
                            <label for="login">Login</label>
                            <input type="text" name="login" id="login" error="error-3" placeholder="Saisir votre Login">
                            <div class="error-form" id="error-3"></div>
                        </div>

                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" error="error-4" placeholder="Saisir votre mot de passe">
                            <div class="error-form" id="error-4"></div>
                        </div>

                        <div class="form-control">
                            <label for="confirm">Confirmer</label>
                            <input type="password" name="confirm" id="confirm" error="error-5" placeholder="Veuillez confirmer votre mot de passe">
                            <div class="error-form" id="error-5"></div>
                        </div>
                </article>

                <article class="col-md-6">

                    <div class="upload">
                        <label for="photo">Photo</label>
                        <img src="../public/images/logos et icones/7.jpg" id="im" class="image-ronde-avatar">
                        <input type="file" name="monfichier" id="photo" class="btn btn-primary" onchange="previewImage(event)"/>

                        <div class="btn-validation">
                            <button type="submit" name="velider" class="btn btn-success">Valider</button>
                        </div>
                    </div>

                    

                </article>

                    </form>
            </div>
        </div>

    </div>
</body>
</html>


<script>
//validation des champs //validation des champs  //validation des champs  //validation des champs  //validation des champs 
    const inputs= document.getElementsByTagName("input");
    for (input of inputs){
        input.addEventListener("keyup",function(e){
           if (e.target.hasAttribute("error")){
               var idDivError=e.target.getAttribute("error");
               document.getElementById(idDivError).innerText=""
           }
        })
    }
    document.getElementById("form-inscription").addEventListener("submit",function(e){
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

//upload de l'image //upload de l'image //upload de l'image //upload de l'image //upload de l'image
    function previewImage(event)
    {
        var reader=new FileReader();
        var imageField=document.getElementById("im")
        reader.onload=function()
        {
            if(reader.readyState==2)
            {
                imageField.src=reader.result;
            }
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>