
    <style>@import url("./public/css/style-inscription.css");</style>

        <div class="row">
            <div class="image">
                <img src="public/images/logos et icones/logo1.png" alt="">
            </div>
            <div class="barre">
                <p>INSCRIVEZ-VOUS POUR JOUER</p>
                <a href="#" class="btn btn-primary" id="link_inscription">Se connecter</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <article class="col-md-6">
                    <form action="" method="POST" class="form" id="inscription-form">

                        <div class="form-control">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" error="error3" placeholder="Saisir votre prenom">
                            <div class="error-form" id="error3"></div>
                        </div>

                        <div class="form-control">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" error="error-4" placeholder="Saisir votre nom">
                            <div class="error-form" id="error-4"></div>
                        </div>

                        <div class="form-control">
                            <label for="login">Login</label>
                            <input type="text" name="login" id="login" error="error-5" placeholder="Saisir votre Login">
                            <div class="error-form" id="error-5"></div>
                        </div>

                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" error="error-6" placeholder="Saisir votre mot de passe">
                            <div class="error-form" id="error-6"></div>
                        </div>

                        <div class="form-control">
                            <label for="confirm">Confirmer</label>
                            <input type="password" name="confirm" id="confirm" error="error-7" placeholder="Veuillez confirmer votre mot de passe">
                            <div class="error-form" id="error-7"></div>
                        </div>
                </article>

                        <article class="col-md-6">

                            <div class="upload">
                                <label for="photo">Photo</label>
                                <img src="./public/images/logos et icones/7.jpg" id="im" class="image-ronde-avatar">
                                <input type="file" name="monfichier" id="photo" class="btn btn-primary" onchange="previewImage(event)"/>

                                <div class="btn-validation">
                                    <button type="submit" name="valider" class="btn btn-success">Valider</button>
                                </div>
                            </div>

                        </article>

                    </form>
            </div>
        </div>

        <script src="./public/js/jquery.js"></script>
    <script src="./public/js/retour_connexion.js"></script>
   <script src="./public/js/validation2.js"></script>