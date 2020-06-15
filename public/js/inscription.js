
function fileContentLoader(target, fileName){
    target.load(`./pages/${fileName}`,function(response, status,detail){        
         if(status === 'error'){
            $("#container-fluid").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
        }
    });
}

//Events
$('container-fluid')

$('#connexion-form').submit(function(){
    let form_data= $(this).serialize();
    let form_method= $(this).attr("method");
    let  form_action= $(this).attr('action');

    $.ajax({
        url:form_action,
        type:form_method,
        data: form_data,
        success: function(data,statut){
            if (data==="success_admin"){
                window.location.replace('./pages/admin.php');
            }else if(data==="success_joueur") {
                window.location.replace('./pages/jeu.php');
            }else{
                return false;
            }
        }
    })
});

//Link
$('#link_inscription').click(function(e){
    
    const form_inscription = $('#container-fluid');
    form_inscription.html('');
    fileContentLoader(form_inscription,'inscription.php');
    
});

