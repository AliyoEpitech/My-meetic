console.log("Sa marche bro");

// fetch("/home/epitech-msc-20/Projet/W-PHP-501-LYN-1-1-mymeetic-aliyo.moussa/Dossierphp/index.php", {method:"get"})
// .then((reponse) => {
//     return reponse.json();
// })
// .then((json) => {
//     console.log(json);
// })

fetch("index.php", { method: "get",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json)=> {
        console.log(json);
    })