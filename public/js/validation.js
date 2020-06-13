    
    $('#connexion').submit((event)=>{
// Hiding error message

        $("#error_login").hide();
        var error_login = false;

// Functions

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
    
// Events

    $("#login").focusout(function() {
        check_login();
    });

    $("#connexion-form").submit(function() {
        error_login = false;

        check_login();

        if(error_login == false) {
            return true;
        }else {
            return false;
        }
    });
});