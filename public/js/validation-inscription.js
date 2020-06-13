    
// Hiding error message

$("#error_prenom").hide();
$("#error_nom").hide();        
$("#error_login").hide();
$("#error_pwd").hide();
$("#error_confirm").hide();

var error_prenom = false;
var error_nom = false;
var error_login = false;
var error_pwd = false;
var error_confirm = false;
        

// Functions

function check_prenom() {
        var prenom_length = $("#prenom").val().length;
        if(prenom_length < 1) {
            $("#error_prenom").html("This field is required!");
            $("#error_prenom").show();
            error_prenom = true;
        }else {
            $("#error_prenom").hide();
        }
    }

    function check_nom() {
        var nom_length = $("#nom").val().length;
        if(nom_length < 1) {
            $("#error_nom").html("This field is required!");
            $("#error_nom").show();
            error_nom = true;
        }else {
            $("#error_nom").hide();
        }
    }

    function check_login() {
        var login_length = $("#login").val().length;
        if(login_length < 1) {
            $("#error_login").html("This field is required!");
            $("#error_login").show();
            error_login = true;
        }else {
            $("#error_login").hide();
        }
    }

    function check_pwd() {
        var pwd_length = $("#password").val().length;
        if(pwd_length < 1) {
            $("#error_pwd").html("This field is required!");
            $("#error_pwd").show();
            error_pwd = true;
        }else {
            $("#error_pwd").hide();
        }
    }

    function check_confirm() {
        var confirm_length = $("#confirm").val().length;
        if(confirm_length < 1) {
            $("#error_confirm").html("This field is required!");
            $("#error_confirm").show();
            error_confirm = true;
        }else {
            $("#error_confirm").hide();
        }
    }
    
// Events


    $("#prenom").focusout(function() {
        check_prenom();
    });

    $("#nom").focusout(function() {
        check_nom();
    });

    $("#login").focusout(function() {
        check_login();
    });

    $("#password").focusout(function() {
        check_pwd();
    });

    $("#confirm").focusout(function() {
        check_confirm();
    });

    $("#inscription-form").submit(function() {
        error_prenom = false;
        error_nom = false;
        error_login = false;
        error_pwd = false;
        error_confirm = false;   

        check_prenom();
        check_nom();
        check_login();
        check_pwd();    
        check_confirm();
                    

        if(error_prenom == false && error_nom == false && error_login == false && error_pwd == false && error_confirm == false) {
            return true;
        }else{
            return false;
        }
    });