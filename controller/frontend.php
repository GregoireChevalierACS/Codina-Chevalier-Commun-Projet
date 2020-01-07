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
 //   $namesPlaceholder = getNamePlaceholder(); //remplacer les placeholders au moment de la création de la db
    require('view/frontend/launchedInfinimentPetit.php');
} 
