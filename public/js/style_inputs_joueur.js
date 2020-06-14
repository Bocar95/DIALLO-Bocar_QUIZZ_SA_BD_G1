$(document).ready(function(){

    var $prenom = $('#prenom'),
        $nom= $('#nom'),
        $login= $('#login'),
        $password = $('#password'),
        $confirm = $('#confirm'),
        $file= $('#photo');

        $(document).on('keyup','.field',function(){ // Lorsqu'on saisit sur un input
            if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
                $(this).css({ // on rend le champ rouge
                    borderColor : 'red',
                    color : 'red'
                });
            }
            else{
                $(this).css({ // si tout est bon, on le rend vert
                    borderColor : 'green',
                    color : 'green'
                });
            }
        });

        $(document).on('click','#valider',function(e){
            let arrayinput=[$prenom,$nom,$login,$password,$confirm,$file];
            arrayinput.forEach(input=>{
                if(input.val() === ""){ // Si le champ est vide 
                    input.css({ // on rend le champ rouge
                        borderColor : 'red',
                        color : 'red'
                    });
                    /* e.preventDefault(); */
                }
            });
            if($confirm.val()!== $password.val()){
                $("#aint").html("password doesn't match !").css({color: 'red', display:'block'});
                $("#confirm, #password").css({ // on rend le champ rouge
                    borderColor : 'red',
                    color : 'red'
                });
                e.preventDefault();
            }
        });

        $(document).on('keyup','#confirm',function(){
            $("#aint").css("display", "none");
        });

        $(document).on('keyup','#confirm',function(){
            $("#aint").css("display", "none");
        });

        $(document).on('click','#valider',function(){
            var myForm = document.getElementById('inscription-form');
            let form_data= new FormData(myForm);

            $.ajax({
                url:'./traitements/inscriptions-joueur.php',
                processData:false,
                dataType:false,
                contentType:false,
                type:'post',
                data: form_data,
                success: function (data) {
                    if(data === "ok"){
                        window.location.replace = "../index.php";
                    }
                }
            });
        });

});