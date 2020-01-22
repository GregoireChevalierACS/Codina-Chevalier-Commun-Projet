let hauteurVue = window.innerHeight;
let largeurVue = window.innerWidth;
let ratioHorizontal = largeurVue / hauteurVue;

let orientation = document.getElementsByClassName("placeholderViewer");
let listeDesElements = document.getElementsByClassName("placeholderClass");
let listeTitres = document.querySelectorAll(".placeholderTitres");
let intervalleCheckViewport = window.setInterval(checkConstant, 100);




function ratioViewport() {
    
hauteurVue = window.innerHeight;
largeurVue = window.innerWidth;
ratioHorizontal = largeurVue / hauteurVue;

    if ((largeurVue / hauteurVue) > 1) {
        ratioHorizontal == (largeurVue / hauteurVue);
      //  console.log(ratioHorizontal);
    } else if ((largeurVue / hauteurVue) <= 1) {
        ratioHorizontal == (largeurVue / hauteurVue);
       // console.log(ratioHorizontal);
    }
}


function adaptationImages() {
    if (ratioHorizontal > 1) {
        console.log(ratioHorizontal);
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
        console.log(ratioHorizontal);
        if(orientation[0] != undefined){
            orientation[0].classList.remove("gestionnaireScrollHorizontal");
            orientation[0].classList.add("gestionnaireScrollVertical")
            orientation[0].classList.remove("placeholderViewer2");}
        for (let j = 0; j < listeDesElements.length; j++) {
           // console.log("wsh mamene");
            listeDesElements[j].classList.remove("boutonIG");
            listeDesElements[j].classList.remove("boutonIGHorizontal");
            listeDesElements[j].classList.add("boutonIGVertical");
        }

        for (let k = 0; k < listeTitres.length; k++) {

            console.log(listeTitres[k]);
            listeTitres[k].classList.add("titresVerticaux")
            listeTitres[k].classList.remove("placeholderTitres");
        }

    }
}


function checkConstant() {
    ratioViewport();

    adaptationImages();
}

window.addEventListener('wheel', function (e) {

    var topDistance = this.pageYOffset;
    // console.log(e.deltaX);
    //console.log(e.deltaY);

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


// window.addEventListener("scroll", function(event) {
//   console.log("je scrolle ça mère");
//     var topDistance = this.pageYOffset;
//     var layers = document.querySelectorAll("[data-type='parallax']");
//     for (var i = 0; i < layers.length; i++) {
//       var layer = layers[i];
//       var depth = layer.getAttribute("data-depth");
//       var translate3d = 'translate3d(0, ' + -(topDistance * depth) + 'px, 0)';
//       layer.style['-webkit-transform'] = translate3d;
//       layer.style['-moz-transform'] = translate3d;
//       layer.style['-ms-transform'] = translate3d;	
//       layer.style['-o-transform'] = translate3d;
//       layer.style.transform = translate3d;
//     }
//   });

checkConstant();
