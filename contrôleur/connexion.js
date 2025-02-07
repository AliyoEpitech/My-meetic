
fetch("/modeles/connexion.php", { method: "post",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {
        console.log(json);
        var inputMDP = document.getElementById("mdp");
        console.log(inputMDP);
        var buttonConnect = document.getElementById("buttonConnect");
        console.log(buttonConnect);
    
        // buttonConnect.addEventListener("click", (e) => {
        //     buttonConnect["fromAction"] = "/DossierHTML/pageConnexion";
        // });
    
        document.addEventListener('click', (e) => {
            console.log(e.target);
        });
    
        var inputEmail = document.getElementById('inputEmail');
    })
    .catch((error) => console.error("Erreur:", error));
