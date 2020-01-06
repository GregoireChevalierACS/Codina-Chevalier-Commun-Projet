
var animState = document.getElementById("VAISSEAU").style.animationPlayState;

function launch(){
    console.log("bouton launch pressé");
    document.getElementById("VAISSEAU").style.animationPlayState = "running";
}

function delay (URL) {
    console.log("launchage de la page");
    setTimeout( function() { window.location = URL }, 5000 );
}