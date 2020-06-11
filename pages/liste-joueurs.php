    <div id="scrollZone" class="col">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Prenom</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr class="text-center">
                    <td>...</td>
                    <td>...</td>
                </tr>
            </tbody>
        </table>
    </div>

<script>

    $(document).ready(function(){
        
        let offset = 0;
        const tbody = $('#tbody');
        
        $.ajax({
                type: "POST",
                url: "http://localhost/DIALLO-Bocar_QUIZZ_SA_BD_G1/data/sql_liste_joueurs.php",
                data: {limit:7,offset:offset},
                dataType: "JSON",
                success: function (data) {
                    console.log(data);
                    tbody.html('');
                    printData(data,tbody);
                    offset +=7;
                }
            });

            //  Scroll
        const scrollZone = $('#scrollZone')
        scrollZone.scroll(function(){
        //console.log(scrollZone[0].clientHeight)
        const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;

        console.log(st,sh, ch);
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/DIALLO-Bocar_QUIZZ_SA_BD_G1/data/sql_liste_joueurs.php",
                data: {limit:7,offset:offset},
                dataType: "JSON",
                success: function (data) {
                    
                    printData(data,tbody);
                    offset +=7;
                }
            });
        }
           
        })
    });

    function printData(data,tbody){
        $.each(data, function(indice,inscriptions_joueur){
            tbody.append(`
            <tr class="text-center">
                <td>${inscriptions_joueur.prenom}</td>
                <td>${inscriptions_joueur.nom}</td>
            </tr>
        `);
    });
}
</script>