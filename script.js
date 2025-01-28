var input = document.querySelectorAll("input");
console.log(input);
input[4].style.backgroundColor = "antiquewhite";

fetch("index.php", {method:"get",})
.then((reponse)=>{
    return reponse.json();
})
.then(())