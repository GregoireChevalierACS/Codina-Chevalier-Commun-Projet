console.log("coucou");

let divPlanet = document.getElementById("Planets"); 
let divPhenomeneIP = document.getElementById("PhenomesInfinimentPetit"); 
let divPhenomeneIG = document.getElementById("PhenomenesInfinimentGrand");

let buttonPlanet = document.getElementById("Planètes"); 
let buttonPhenomeIP = document.getElementById("Infiniment Petit");
let buttonPhenomeIG = document.getElementById("Infiniment Grand");

let displayPlanet = false;
let displayPIP = false;
let displayPIG = false; 

buttonPlanet.addEventListener("click", function(){
    console.log("Button planet ok ! ")
    if (!displayPlanet){
    displayPlanet = true; 
    divPlanet.style.display ="block"
    divPhenomeneIG.style.display ="none"
    divPhenomeneIP.style.display = "none"
    } else {
        displayPlanet = false; 
        divPlanet.style.display ="none"

    }
     
})

buttonPhenomeIP.addEventListener("click", function(){
    console.log("Button planet ok ! ")
    if (!displayPIP){
    displayPIP = true; 
    divPlanet.style.display ="none"
    divPhenomeneIG.style.display ="none"
    divPhenomeneIP.style.display = "block"

    } else{
    displayPIP = false; 
        divPhenomeneIP.style.display = "none"
    }
     
})

buttonPhenomeIG.addEventListener("click", function(){
    console.log("Button planet ok ! ")
    if(!displayPIG){
        displayPIG = true; 
        divPlanet.style.display ="none"
        divPhenomeneIG.style.display ="block"
        divPhenomeneIP.style.display = "none"

    } else{
        displayPIG = false; 
        divPhenomeneIG.style.display ="none"

    }
     
})
