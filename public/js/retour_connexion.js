function fileContentLoader(target, fileName){
    target.load(`./pages/${fileName}`,function(response, status,detail){        
         if(status === 'error'){
            $("#container-fluid").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
            //ou bien
            //$("#table").html(`<p class="text-center alert alert-danger col">Code Erreur : ${detail.status}, ${detail.statusText}</p>`);
        }
    });
}

//Events
$('container-fluid')

//Link
$('#link_inscription').click(function(e){
    const form_connexion = $('#container-fluid');
    
    fileContentLoader(form_connexion,'connexion.php');
});