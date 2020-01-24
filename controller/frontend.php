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
    if(!isset($_COOKIE['Planet'])){
        setcookie('Planet', 'Planet');
        $_COOKIE['Planet'] = false;
        
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
    if(!isset($_COOKIE['PhenomeneIG'])){
        setcookie('PhenomeneIG', 'PhenomeneIG');
        $_COOKIE['PhenomeneIG'] = false;
        
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
    $question = getQuestion($nameParticle);
    $responses = getResponse($question['id']); 
    
    if(!isset($_COOKIE['Particle'])){
        setcookie('Particle', 'Particle');
        $_COOKIE['Particle'] = false;
        
    } 
    require('view/frontend/particle.php'); 
}

function getNewQuizz(){
   
   $cookie = $_GET['name'] . "quiz"; 
    
    if(!isset($_COOKIE[$cookie])){
        setcookie($cookie, $cookie);
        $_COOKIE[$cookie] = false;
        
    } 
   $question= getQuestion($_POST['theme']); 
   $responses = getResponse($question['id']);
   $lastGoodResponse = getLastGoodResponse($_POST['idGoodReponse']);
   require('view/frontend/quizz.php'); 
}


function tag(){
    $tags = getTag();
    require('view/frontend/tag.php'); 

}