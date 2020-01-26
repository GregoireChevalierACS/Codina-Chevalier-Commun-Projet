let hauteurVue = window.innerHeight;
let largeurVue = window.innerWidth;
let ratioHorizontal = largeurVue / hauteurVue; 
let orientation = document.getElementsByClassName("placeholderViewer");
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
            orientation[0].classList.remove("gestionnaireScrollVertical");
            orientation[0].classList.add("gestionnaireScrollHorizontal")
            orientation[0].classList.remove("placeholderViewer2");
        }
        for (let i = 0; i < listeDesElements.length; i++) {
            listeDesElements[i].classList.remove("boutonIG");
            listeDesElements[i].classList.remove("boutonIGVertical");
            listeDesElements[i].classList.add("boutonIGHorizontal");
        }

    } else if (ratioHorizontal <= 1) { 
        if(orientation[0] != undefined){
            orientation[0].classList.remove("gestionnaireScrollHorizontal");
            orientation[0].classList.add("gestionnaireScrollVertical")
            orientation[0].classList.remove("placeholderViewer2");}
        for (let j = 0; j < listeDesElements.length; j++) { 
            listeDesElements[j].classList.remove("boutonIG");
            listeDesElements[j].classList.remove("boutonIGHorizontal");
            listeDesElements[j].classList.add("boutonIGVertical");
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

window.addEventListener('wheel', function (e) {
    // fonction qui gère la parallaxe selon le scroll

    var topDistance = this.pageYOffset; 

    var layers = document.querySelectorAll("[data-type='parallax']");
    for (var i = 0; i < layers.length; i++) {
        var layer = layers[i];
        var depth = layer.getAttribute("data-depth");
        var translate3d = 'translate3d(0, ' + -(topDistance * depth) + 'px, 0)';
        layer.style['-webkit-transform'] = translate3d;
        layer.style['-moz-transform'] = translate3d;
        layer.style['-ms-transform'] = translate3d;
        layer.style['-o-transform'] = translate3d;
        layer.style.transform = translate3d;
    }
});
 

checkConstant();
