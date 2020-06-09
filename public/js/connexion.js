function fileContentLoader(target, fileName){
    target.load(`./pages/${fileName}`,function(response, status,detail){        
         if(status === 'error'){
            $("#container-fluid").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
        }
    });
}

//Events
$('container-fluid')


$(document).ready(function(){
    const form_connexion = $('#container-fluid');
        
    fileContentLoader(form_connexion,'connexion.php');
})

