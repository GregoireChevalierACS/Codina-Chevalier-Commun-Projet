<?php

require('model/frontend.php'); 

function welcome(){
require('view/frontend/welcome.php');
}

function launched(){
    $namesPlanets = getNamePlanets();
    
    require('view/frontend/launched.php');
} 

function menu(){
    require('view/frontend/menu.php');
}

function planets($namePlanet){
    $infosArray = getInfos($namePlanet);
    $namesSatellites = getNamesSatellites($namePlanet); 
    $question = getQuestion($namePlanet);
    $responses = getResponse($question['id']); 
    if(!isset($_COOKIE['planet'])){
        setcookie('planet', 'planet');
        $_COOKIE['planet'] = false;
        
    }


    require('view/frontend/infosPlanet.php');

}

function topics(){
    $namesPhenomenon = getNamePhenomenons();
    require('view/frontend/launchedInfinimentGrand.php');
} 

function phenomeneIG($namePhenomenonIG){
    $infosPhenomeneIG = getInfosPhenomeneIG($namePhenomenonIG);
    $question = getQuestion($namePhenomenonIG);
    $responses = getResponse($question['id']); 
    if($namePhenomenonIG == "Les Galaxies"){
       $nameGalaxies = getNameGalaxies();
    }
    if(!isset($_COOKIE['phenomeneIG'])){
        setcookie('phenomeneIG', 'phenomeneIG');
        $_COOKIE['phenomeneIG'] = false;
        
    } 
    require('view/frontend/phenomenesIG.php');
}

function galaxies($nameGalaxie){
    $infosGalaxies = getInfosGalaxies($nameGalaxie); 
    require('view/frontend/galaxies.php');
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
    if(!isset($_COOKIE['particle'])){
        setcookie('particle', 'particle');
        $_COOKIE['particle'] = false;
        
    } 
    require('view/frontend/particle.php'); 
}

function getNewQuizz(){
    print_r($_POST['theme']);
    die();
    if(!isset($_COOKIE[$_POST['theme']])){
        setcookie($_POST['theme'], $_POST['theme']);
        $_COOKIE[$_POST['theme']] = false;
        
    } 
   $question= getQuestion($_POST['theme']); 
   $responses = getResponse($question['id']);
   $lastGoodResponse = getLastGoodResponse($_POST['idGoodReponse']);
   require('view/frontend/quizz.php'); 
}
