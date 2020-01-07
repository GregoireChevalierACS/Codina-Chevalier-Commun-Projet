<?php

require('model/frontend.php'); 

function welcome(){
require('view/frontend/welcome.php');
}

function launched(){
    $namesPlanets = getNamePlanets();
    
    require('view/frontend/launched.php');
} 
function planets($namePlanet){
    $infosArray = getInfos($namePlanet);
    $namesSatellites = getNamesSatellites($namePlanet); 
    
    require('view/frontend/infosPlanet.php');

}

function topics(){
    $namesPhenomenon = getNamePhenomenons();
    require('view/frontend/launchedInfinimentGrand.php');
} 

function phenomeneIG($namePhenomenonIG){
    $infosPhenomeneIG = getInfosPhenomeneIG($namePhenomenonIG);
    require('view/frontend/phenomenesIG.php');
}

function satellites($namesSatellite){
    $infosSatellites = getInfosSatellite($namesSatellite); 
    require('view/frontend/satellites.php');
}
function minisizeTopics(){
 $namesminisizeTopics = getNamesMinisizeTopics(); 
require('view/frontend/launchedInfinimentPetit.php');
}

function particle($nameParticle){
    $infoParticle = getInfosParticle($nameParticle); 
    require('view/frontend/particle.php'); 
}
