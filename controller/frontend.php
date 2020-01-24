<?php

require('model/frontend.php'); 

function welcome(){
require('view/frontend/welcome.php');   
// redirige vers la page d'accueil
}

function launched(){
    $namesPlanets = getNamePlanets();   
    // appelle la fonction du modèle qui récupère le nom et le visuel de chaque planète dans la BdD
    
    require('view/frontend/launched.php');  
    // redirige vers la page du système solaire
} 

function menu(){
    require('view/frontend/menu.php');  
    // redirige vers la page du menu
}

function planets($namePlanet){   
    $infosArray = getInfos($namePlanet);   
    // appelle la fonction du modèle qui récupère le contenu de chaque entrée de la BdD "Planets" pour la planète concernée
    $namesSatellites = getNamesSatellites($namePlanet);    
    // appelle la fonction du modèle qui récupère le nom des satellites pour la planète concernée
    $question = getQuestion($namePlanet);   
    // appelle la fonction du modèle qui récupère les questions pour la planète concernée
    $responses = getResponse($question['id']);    
    // appelle la fonction du modèle qui récupère les réponses pour la planète concernée
    if(!isset($_COOKIE['Planet'])){
        setcookie('Planet', 'Planet');
        $_COOKIE['Planet'] = false;
        
    }


    require('view/frontend/infosPlanet.php');   
    // redirige vers la page d'informations relatives aux planètes

}

function topics(){
    $namesPhenomenon = getNamePhenomenons();
    require('view/frontend/launchedInfinimentGrand.php');   
    // redirige vers la page de l'infiniment grand
} 

function phenomeneIG($namePhenomenonIG){ 
    // appelle la fonction du modèle qui récupère le contenu de chaque entrée de la BdD PhenomeneInfinimentGrand pour le sujet concerné
    $infosPhenomeneIG = getInfosPhenomeneIG($namePhenomenonIG);
    $question = getQuestion($namePhenomenonIG);
    $responses = getResponse($question['id']); 
    if($namePhenomenonIG == "Les Galaxies"){
       $nameGalaxies = getNameGalaxies();
    }
    if(!isset($_COOKIE['PhenomeneIG'])){
        setcookie('PhenomeneIG', 'PhenomeneIG');
        // appelle la fonction qui déverrouille l'achievement de première planète découverte
        $_COOKIE['PhenomeneIG'] = false;
        // désactive la condition de déverrouillage de l'achievement de première planète découverte
    } 
    require('view/frontend/phenomenesIG.php');  
    // redirige vers la page d'informations relatives aux phénomènes de l'infiniment grand
}

function galaxies($nameGalaxie){
    $infosGalaxies = getInfosGalaxies($nameGalaxie); 
    require('view/frontend/galaxies.php');      
    // redirige vers la page d'exemples de galaxies accessible depuis la page d'informations relatives aux galaxies
}

function satellites($namesSatellite){
    $infosSatellites = getInfosSatellite($namesSatellite); 
    require('view/frontend/satellites.php');    
    // redirige vers la page d'exemples de satellites accessible depuis la page d'informations relatives aux planètes
}

function minisizeTopics(){
 $namesminisizeTopics = getNamesMinisizeTopics(); 
require('view/frontend/launchedInfinimentPetit.php');   
// redirige vers la page de l'infiniment petit
}

function particle($nameParticle){
    $infoParticle = getInfosParticle($nameParticle);
    if(!isset($_COOKIE['Particle'])){
        setcookie('Particle', 'Particle');
        $_COOKIE['Particle'] = false;
        
    } 
    require('view/frontend/particle.php');  
    // redirige vers la page d'informations relatives aux phénomènes de l'infiniment petit
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
   // appelle le contenu de la vue quizz
}


function tag(){
    $tags = getTag();
    require('view/frontend/tag.php');  
    // appelle le contenu relatif aux achievements

}