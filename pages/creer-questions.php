    
    <div class="header">
        <p>PARAMETRER VOS QUIZZ</p>
        <hr>
    </div>
    <article class="col-6">

        <form action="../traitements/creer_questions.php" method="POST" class="form" id="question-form">

            <div class="form-control">
                <label for="question">Questions</label>
                <input type="text" name="question" id="question" placeholder="Saisir la question">
                <small class="error-form" id="error_question"></small>
            </div>

            <div class="form-control">
                <label for="points">Nombre de points</label>
                <input type="number" name="points" id="points">
                <small class="error-form" id="error_points"></small>
            </div>

            <div class="form-control">
                <label for="type_reponse">Type de réponse</label>
                    <select name="type_reponse" id="type_reponse">
                        <option value="" selected>Choisir le type de reponse</option>
                        <option name="multiple" value="multiple" id="multiple">Multiple</option>
                        <option name="simple" value="simple" id="simple">Simple</option>
                        <option name="text" value="text" id="text">Texte</option>
                    </select>
                    <div id="reponse" class="btn btn-reponse">+</div>
            </div>

    </article>
    
            <article class="col-6">
                    <div class="zone_affichage" id="zone_affichage">
                        <!--ON GENERE LES CHAMPS DE REPONSE ICI-->
                    </div>
                    <button type="submit" name="enregistrer" id="enregistrer" class="btn btn-enregistrer">Enregistrer</button>                    
            </article>
        </form>
    

<script src="../public/js/jquery.js"></script>
<script src="../public/js/creer-questions.js"></script>


<style>@import url("../public/css/creer_questions.css");</style>
