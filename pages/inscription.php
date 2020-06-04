
    <style>@import url("./public/css/style-inscription.css");</style>

        <div class="row">
            <div class="image">
                <img src="./public/images/logos et icones/logo1.png" alt="">
            </div>
            <div class="barre">
                <p>INSCRIVEZ-VOUS POUR JOUER</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <article class="col-md-6">
                    <form action="../traitements/inscriptions-joueur.php" method="POST" class="form" id="connexion-form">

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
                        <img src="./public/images/logos et icones/7.jpg" id="im" class="image-ronde-avatar">
                        <input type="file" name="monfichier" id="photo" class="btn btn-primary" onchange="previewImage(event)"/>

                        <div class="btn-validation">
                            <button type="submit" name="velider" class="btn btn-success" onclick="getFormData();">Valider</button>
                        </div>
                    </div>

                    

                </article>

                    </form>
            </div>
        </div>
    