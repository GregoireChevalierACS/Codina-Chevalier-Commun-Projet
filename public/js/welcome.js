
var animState = document.getElementById("VAISSEAU").style.animationPlayState;

function launch(){
    console.log("bouton launch pressé");
    document.getElementById("VAISSEAU").style.animationPlayState = "running";
    console.log(animState);
}
