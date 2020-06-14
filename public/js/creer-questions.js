
//VALIDATION DES CHAMPS.....


// Hiding error message
        
$("#error_question").hide();
$("#error_points").hide();
                
var error_question = false;
var error_points = false;
                
        
// Functions
function check_question() {
    var question_length = $("#question").val().length;

    if(question_length < 1) {
        $("#error_question").html("This field is required!");
        $("#error_question").show();
        error_question = true;
    }else {
        $("#error_question").hide();
    }
}

function check_points() {
    var points_length = $("#points").val().length;

    if(points_length < 1) {
        $("#error_points").html("This field is required!");
        $("#error_points").show();
        error_points = true;
    }else {
        $("#error_points").hide();
    }
}
            
// Events
$("#question").focusout(function() {
    check_question();
});

$("#points").focusout(function() {
    check_points();
});
        
$("#question-form").submit(function() {
    error_question = false;
    error_points = false;                
        
    check_question();
    check_points();                
        
    if(error_question == false && error_points == false) {
        return true;
    }else {
        return false;
    }
});


//GENERATION DES CHAMPS DE REPONSE....
    var num = 0;

$('#reponse').on("click",function(){
    var typeReponse = $('#type_reponse').val();

    if (typeReponse === "multiple"){
        $('#zone_affichage').append(`
                                <br>
                                <input type="text" name="reponse_checkbox_${num}" id="reponse_checkbox_${num}" class="champ" placeholder="Saisir la reponse">
                                <input type="checkbox" name="checkbox_${num}" id="checkbox_${num}" class="btn btn-checkbox">
                                <img src="../public/images/logos et icones/ic-supprimer.png" alt="">
                                <br> `)
    num++;
    }

    if (typeReponse === "simple"){
        $('#zone_affichage').append(`
                                <br>
                                <input type="text" name="reponse_radio_${num}" id="reponse_radio_${num}" class="champ" placeholder="Saisir la reponse">
                                <input type="radio" name="radio" id="radio_${num}" class="btn btn-checkbox">
                                <br> `)
    num++;
    }

    if (typeReponse === "text"){
        $('#zone_affichage').html(`
                                <br>
                                <input type="text" name="reponse_text_${num}" id="reponse_text_${num}" class="champ" placeholder="Saisir la reponse">
                                    `)
    num++;
    }
});
