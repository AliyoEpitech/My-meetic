fetch("/modeles/inscription.php", { method: "post",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {
        console.log(json);
        document.addEventListener("click", (e) => {
            console.log(e.target);
        })
    })
    .catch((error) => console.error("Erreur :", error));
    