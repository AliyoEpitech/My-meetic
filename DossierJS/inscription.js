fetch("../index.php", { method: "get",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {

        console.log(json);

        document.addEventListener("click", (e) => {
            console.log(e.target);
        })
        // inputMDP.addEventListener()
    })
    .catch((error) => console.error("Erreur :", error));