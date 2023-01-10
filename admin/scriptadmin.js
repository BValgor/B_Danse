let addeleve = document.querySelector(".ajoutereleve");
let fermeraddeleve = document.querySelector(".fermeraddeleve");

addeleve.addEventListener("click", function(a){
    affichageaddeleve = document.querySelector (".enregistrementeleve");
    affichageaddeleve.classList.add("visible");
    affichageaddeleve.classList.remove("hidden");
})

fermeraddeleve.addEventListener("click", function(){
    closeeleve = document.querySelector (".enregistrementeleve");
    closeeleve.classList.remove("visible");
    closeeleve.classList.add("hidden");
})