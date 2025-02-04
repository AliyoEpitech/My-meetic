
fetch("../Dossierphp/connexion.php", { method: "get",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {
        console.log(json);
        var inputMDP = document.getElementById("mdp");
        console.log(inputMDP);
        var buttonConnect = document.getElementById("buttonConnect");
        console.log(buttonConnect);
    
        buttonConnect.addEventListener("click", (e) => {
            buttonConnect["fromAction"] = "/DossierHTML/pageConnexion";
        });
    
        document.addEventListener('click', (e) => {
            console.log(e.target);
        });
    
        var inputEmail = document.getElementById('inputEmail');
        let tableauUser = [];

        // json.map((user) => {
        //     console.log(user);    
        //     buttonConnect.addEventListener('click', () => {
        //         console.log(inputEmail['value']);
        //         if(user['email'] == inputEmail['value'] || user['password'] == inputMDP['value']) {
        //             var addLien = document.getElementById('addLien');
        //             window.location = './pageConnexion.html';
        //             console.log('ok');
        //             return;
        //         } else {
        //             var addLien = document.getElementById('addLien');
        //             addLien.href = ''; 
        //         }
        //     });
        // });
    })
    .catch((error) => console.error("Erreur:", error));
