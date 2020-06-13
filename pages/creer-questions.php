    
    <div class="header">
        <p>PARAMETRER VOS QUIZZ</p>
        <hr>
    </div>
    <article class="col-6">

        <form action="" method="POST" class="form" id="form">

            <div class="form-control">
                <label for="question">Questions</label>
                <input type="text" name="question" id="question" error="error-1" placeholder="Saisir la question">
                <div class="error-form" id="error-1"></div>
            </div>

            <div class="form-control">
                <label for="points">Nombre de points</label>
                <input type="number" name="points" id="points" error="error-2">
                <div class="error-form" id="error-2"></div>
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

<style>

.champ {
    width: 70%;
    position: relative;
    margin-left: 10%;
    font-size: 20px;
    border-radius: 6px;
    background-color: whitesmoke;
    border: 2px solid navajowhite;
    text-align: center;
}

</style>

<script>

    var num = 0;

$('#reponse').on("click",function(){
    var typeReponse = $('#type_reponse').val();

    if (typeReponse === "multiple"){
        $('#zone_affichage').html(`<input type="text" name="reponse_${num}" id="reponse_${num}" class="champ" placeholder="Saisir la reponse">
                                <input type="checkbox" name="checkbox_${num}" id="checkbox_${num}" class="btn btn-checkbox">
                                    `)
    num++;
    }
});

</script>