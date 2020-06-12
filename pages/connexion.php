<style>@import url("./public/css/style.css");</style>
        <div class="row">

            <article class="col-md-6">
                <h1>Welcome to the</h1>
                <img src="public/images/logos et icones/logo2.png" alt="">
            </article>

            <article class="col-md-6">
                <form action="traitements/connexion1.php" method="POST" class="form" id="connexion-form">
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
                        <button type="submit" name="connexion" id="connexion" class="btn btn-success">Connexion</button>
                    </div>

                    <div class="btn-inscription">
                        <p>If you don't have an account...</p>
                        <a href="#" class="btn btn-primary" id="link_inscription">Sign up</a>
                    </div>
                </form>
            </article>

        </div>

        <script src="./public/js/jquery.js"></script>
        <script src="./public/js/inscription.js"></script>
        <script src="./public/js/validation.js"></script>