//Link
$('#link_liste_Questions').on("click",function(){

    const menu_liste_Questions = $('#row');

    menu_liste_Questions.html('');
    menu_liste_Questions.load(`liste-questions.php`);
    
});

//Link
$('#link_creer_admin').on("click",function(){

    const menu_creer_admin = $('#row');

    menu_creer_admin.html('');
    menu_creer_admin.load(`creer-admin.php`);
    
});

//Link
$('#link_liste_joueurs').on("click",function(){

    const menu_liste_joueurs = $('#row');

    menu_liste_joueurs.html('');
    menu_liste_joueurs.load(`liste-joueurs.php`);
    
});

//Link
$('#link_creer_Questions').on("click",function(){
    
    const menu_creer_questions = $('#row');

    menu_creer_questions.html('');
    menu_creer_questions.load(`creer-questions.php`);
    
    
});