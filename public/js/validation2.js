const inputs2= document.getElementsByTagName("input");
    for (input of inputs2){
        input.addEventListener("keyup",function(e){
           if (e.target.hasAttribute("error")){
               var idDivError=e.target.getAttribute("error");
               document.getElementById(idDivError).innerText=""
           }
        })
    }
    document.getElementById("inscription-form").addEventListener("submit",function(e){
        const inputs2= document.getElementsByTagName("input");
        var error=false;
        for (input of inputs2){
            if (input.hasAttribute("error")){
                var idDivError=input.getAttribute("error");
            if (!input.value){
                document.getElementById(idDivError).innerText="Ce champ est obligatoire."
                error=true
            }
            
            }
        }

        if(error){
            e.preventDefault();
            return false;
        }
           
    })