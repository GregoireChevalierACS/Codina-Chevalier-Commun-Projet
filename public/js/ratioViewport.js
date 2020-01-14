
let hauteurVue = window.innerHeight;
let largeurVue = window.innerWidth;
let ratioHorizontal = largeurVue / hauteurVue;
let orientation = document.getElementsByClassName("placeholderViewer");
let listeDesElements = document.getElementsByClassName("placeholderClass");
let listeTitres = document.querySelectorAll(".placeholderTitres");


console.log(listeTitres);

function ratioViewport(){
    if((largeurVue / hauteurVue) > 1){
        ratioHorizontal == (largeurVue / hauteurVue);
        console.log("écran orienté horizontalement");
    }else if((largeurVue / hauteurVue) <= 1){
        ratioHorizontal == (largeurVue / hauteurVue);
        console.log("écran orienté verticalement");
    }
}


function adaptationImages(){
    if(ratioHorizontal > 1){
        console.log(listeDesElements);
        orientation[0].classList.add("gestionnaireScrollHorizontal")
        orientation[0].classList.remove("placeholderViewer");
        for (let i = 0; i < listeDesElements.length; i++){
            listeDesElements[i].classList.remove("boutonIG");
            listeDesElements[i].classList.remove("boutonIGVertical");
            listeDesElements[i].classList.add("boutonIGHorizontal");
        }
        console.log("les images sont au format horizontal")
    }else if(ratioHorizontal <= 1){
        orientation[0].classList.add("gestionnaireScrollVertical")
        orientation[0].classList.remove("placeholderViewer");
        for (let j = 0; j < listeDesElements.length; j++){
            listeDesElements[j].classList.remove("boutonIG");
            listeDesElements[j].classList.remove("boutonIGHorizontal");
            listeDesElements[j].classList.add("boutonIGVertical");
        }
        console.log("ici");
        for (let k = 0; k < listeTitres.length; k++){

            console.log(listeTitres[k]);
            listeTitres[k].classList.add("titresVerticaux")
            listeTitres[k].classList.remove("placeholderTitres");
        }
        console.log("les images sont au format vertical");
    }
}


function checkConstant(){
    ratioViewport();
    console.log(ratioHorizontal);
    adaptationImages();
}

checkConstant();
