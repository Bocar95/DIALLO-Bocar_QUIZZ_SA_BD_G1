$(document).ready(function() {

    let offset= 0;
    let tbody= $('#tbody');
    $.ajax({
        url:"../data/sql_liste_joueurs.php",
        type: 'post',
        dataType: 'json',
        data:{
            limit: 7,
            offset: offset
        },
        success: function (data) {
            showData(data, tbody);
            offset+=7;
        }
    });

    // Fonction qui affiche les joueurs dans la page

    function showData(data, tbody) {
        $.each(data, (indice, inscriptions_joueur)=> {
            tbody.append(`<tr>
                <td>${inscriptions_joueur.prenom}</td>
                <td>${inscriptions_joueur.nom}</td>
                <td>${inscriptions_joueur.id_joueur}</td>
                <td style="display:none;">${inscriptions_joueur.login}</td>
                <td><button type="button" class="btn btn-outline-primary"id="mdf" data-toggle="modal" data-target="#myModal">Modify</button></td>
                <td><button type="button" class="btn btn-outline-danger" id="dlt">Delete</button></td>
            </tr>`);
        })
    }

    // Fonction qui permet la pagination par scroll

    const scrollzone= $('#scrollzone');
    scrollzone.scroll(function () {
        const st= scrollzone[0].scrollTop;
        const sh= scrollzone[0].scrollHeight;
        const ch= scrollzone[0].clientHeight;
        const link = "../data/sql_liste_joueurs.php"
        if (sh-st<= ch){
            $.ajax({
                type:'post',
                url:link,
                data:{
                    limit: 7,
                    offset: offset
                },
                dataType: 'JSON',
                success: function (data) {
                    showData(data, tbody);
                    offset+=7;
                }
            });
        }
    });

    // Fonction qui permet de supprimer un joueur

    $(document).on('click','#dlt',function () {
        if (confirm("Do you want to delete?")){ // demande une confirmation de suppression
            $(this).parents("tr").remove(); // récupère le div parent à supprimer
            let id_joueur= $(this).parents('tr').find('td').eq(2).html(); // supprime le td du tr parent selectionné comportant l'id
           
            $.ajax({
                type:'post',
                url:'../data/delete.php',
                dataType:'html',
                data:{
                    id_joueur: id_joueur
                },
                success:function (data) {
                    alert(data);
                    if (data==="ok"){
                        alert('Successful deletion');
                    }
                }
            });
        }
    });

    // Fonction qui modifie le joueur

    $(document).on("click","#modif", function() {
            let firstname=$('#firstname').val();
            let lastname=$('#lastname').val();
            let login=inscriptions_joueur.login;
            $.ajax({
                url:'../data/modifyPlayer.php',
                type:'post',
                data:{
                    firstname:firstname,
                    lastname:lastname,
                    idu:idu
                },
                dataType:'html',
                success:function (data) {
                        alert('Modification carried out successfully');
                }
            });
        });

});