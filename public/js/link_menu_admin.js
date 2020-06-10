function fileContentLoader(target, fileName){
    target.load(`../pages/${fileName}`,function(response, status,detail){        
         if(status === 'error'){
            $("#container-fluid").html(`<p class="text-center alert alert-danger col">Le contenu demandé est introuvable!</p>`);
        }
    });
}

//Link
/*$('#link_inscription').click(function(e){
    
    const form_inscription = $('#container-fluid');

    fileContentLoader(form_inscription,'inscription.php');
    
});*/

//Link
/*$('#link_inscription').click(function(e){
    
    const form_inscription = $('#container-fluid');

    fileContentLoader(form_inscription,'inscription.php');
    
});*/

//Link
$('#link_liste_joueurs').on("click",function(){
    
    const menu_liste_joueurs = $('#row');

    //fileContentLoader(menu_liste_joueurs,'liste-joueurs.php');
    menu_liste_joueurs.html("");
    menu_liste_joueurs.load(`liste-joueurs.php`);
    
});

//Link
/*$('#link_inscription').click(function(e){
    
    const form_inscription = $('#container-fluid');

    fileContentLoader(form_inscription,'inscription.php');
    
});*/