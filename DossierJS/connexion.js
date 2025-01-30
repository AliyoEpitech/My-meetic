fetch("../index.php", { method: "get",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {
        console.log(json);
        var inputMDP = document.getElementById("mdp");
        console.log(inputMDP);
        document.addEventListener("click", (e) => {
            console.log(e.target);
        })

            json.forEach(element => {
                if(element["passeword"] == inputMDP) {
                    inputMDP.value.addEventListener("keypress", (e) => {
                        console.log("tu a taper un mdp qui est bon");
                    })
                var passeword =  element["passeword"];
                console.log(passeword);
                }
             });
    })
    .catch((error) => console.error("Erreur :", error));
