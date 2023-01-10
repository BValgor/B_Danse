let video = document.querySelector(".boutonvideobio1");

video.addEventListener("click", function(e){
    affichage = document.querySelector (".conteneurteaser");
    affichage.classList.add("visibility");
    affichage.classList.remove("conteneurteaser");
})