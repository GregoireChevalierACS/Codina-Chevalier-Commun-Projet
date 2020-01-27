let hauteurVue = window.innerHeight;
let largeurVue = window.innerWidth;
let ratioHorizontal = largeurVue / hauteurVue; 
let orientation = document.getElementsByClassName("containerMenu2");
let listeDesElements = document.getElementsByClassName("placeholderClass");
let listeTitres = document.querySelectorAll(".placeholderTitres");
let intervalleCheckViewport = window.setInterval(checkConstant, 100);
 

function ratioViewport() {
// fonction qui détermine si le viewport est horizontal ou vertical
hauteurVue = window.innerHeight;
largeurVue = window.innerWidth;
ratioHorizontal = largeurVue / hauteurVue;

    if ((largeurVue / hauteurVue) > 1) {
        ratioHorizontal == (largeurVue / hauteurVue); 
    } else if ((largeurVue / hauteurVue) <= 1) {
        ratioHorizontal == (largeurVue / hauteurVue); 
    }
}


function adaptationImages() {
    // fonction qui réorganise la page horizontalement ou verticalement en modifiant les classes css
    if (ratioHorizontal > 1) { 
        if(orientation[0] != undefined){
            orientation[0].classList.remove("containerMenuV");
            orientation[0].classList.add("containerMenuH");
            orientation[0].classList.remove("containerMenu");
        }
        for (let i = 0; i < listeDesElements.length; i++) {
            listeDesElements[i].classList.remove("classV");
            listeDesElements[i].classList.add("classH");
        }

    } else if (ratioHorizontal <= 1) { 
        if(orientation[0] != undefined){
            orientation[0].classList.remove("containerMenuH");
            orientation[0].classList.add("containerMenuV");
            orientation[0].classList.remove("containerMenu");
        }
        for (let j = 0; j < listeDesElements.length; j++) { 
            listeDesElements[j].classList.remove("classH");
            listeDesElements[j].classList.add("classV");
        }

        for (let k = 0; k < listeTitres.length; k++) {  
            listeTitres[k].classList.add("titresVerticaux")
            listeTitres[k].classList.remove("placeholderTitres");
        }

    }
}


function checkConstant() {
    // fonction appellée tous les dizièmes de secondes qui gère la responsivité (?) du site.
    ratioViewport();

    adaptationImages();
}



checkConstant();
