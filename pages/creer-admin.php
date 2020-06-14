
    <style>@import url("../public/css/style_creer_admin.css");</style>

<div class="container">
    <div class="row">
        <article class="col-md-6">
            <form action="../traitements/creer_admin.php" method="POST" class="form" id="inscription-form" enctype="multipart/form-data">

                <div class="form-control">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" error="error3" placeholder="Saisir votre prenom">
                    <small class="error-form" id="error_prenom"></small>
                </div>

                <div class="form-control">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" error="error-4" placeholder="Saisir votre nom">
                    <small class="error-form" id="error_nom"></small>
                </div>

                <div class="form-control">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" error="error-5" placeholder="Saisir votre Login">
                    <small class="error-form" id="error_login"></small>
                </div>

                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" error="error-6" placeholder="Saisir votre mot de passe">
                    <small class="error-form" id="error_pwd"></small>
                </div>

                <div class="form-control">
                    <label for="confirm">Confirmer</label>
                    <input type="password" name="confirm" id="confirm" error="error-7" placeholder="Veuillez confirmer votre mot de passe">
                    <small class="error-form" id="error_confirm"></small>
                </div>
        </article>

                <article class="col-md-6">

                    <div class="upload">
                        <label for="photo">Photo</label>
                        <img id="output" class="image-ronde-avatar">
                        <small class="pl-4" id="aint"></small>
                        <input type="file" name="monfichier" id="photo" class="btn btn-primary" accept="photos/*" onchange="loadFile(event)"/>

                        <div class="btn-validation">
                            <button type="submit" name="valider" id="valider" class="btn btn-success">Valider</button>
                        </div>
                    </div>

                </article>

            </form>
    </div>
</div>

<script src="../public/js/jquery.js"></script>
<script src="../public/js/image_output.js"></script>
<script src="../public/js/validation-inscription.js"></script>
<script src="../public/js/style_inputs_admin.js"></script>

