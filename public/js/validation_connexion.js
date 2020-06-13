    
        // Hiding error message
        
                $("#error_login").hide();
                $("#error_pwd").hide();
                
                var error_login = false;
                var error_pwd = false;
                
        
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
            
        // Events
        
            $("#login").focusout(function() {
                check_login();
            });

            $("#password").focusout(function() {
                check_pwd();
            });
        
            $("#connexion-form").submit(function() {
                error_login = false;
                error_pwd = false;                
        
                check_login();
                check_pwd();                
        
                if(error_login == false && error_pwd == false) {
                    return true;
                }else {
                    return false;
                }
            });