<?php 
if(isset($cookie)){
$themeQuiz = $cookie = str_replace(' ', '', $question['theme']);

if(isset($_COOKIE[$themeQuiz]) && $_COOKIE[$themeQuiz] == false){
    $_COOKIE[$themeQuiz] = true; 
    $affichageQuizz = true;
}
} 




if(isset($_COOKIE['Planet']) && $_COOKIE['Planet'] == false){
    
    
    $_COOKIE['Planet'] = true;
    
    $affichagePlanet = true;

    
}

if(isset($_COOKIE['Particle']) && $_COOKIE['Particle'] == false){
    
    
    $_COOKIE['Particle'] = true;
    
    $affichageParticle = true;

    
}

if(isset($_COOKIE['PhenomeneIG']) && $_COOKIE['PhenomeneIG'] == false){
    
    
    $_COOKIE['PhenomeneIG'] = true;
    
    $affichagephenomeneIG  = true;

    
}

if(isset($_COOKIE['planetsquiz']) && $_COOKIE['planetsquiz'] == false){
    
    
    $_COOKIE['planetsquiz'] = true;
    
    $Planetquizz = true;

    
}

if(isset($_COOKIE['particlequiz']) && $_COOKIE['particlequiz'] == false){
    
    
    $_COOKIE['particlequiz'] = true;
    
    $Particlequiz = true;

    
}

if(isset($_COOKIE['phenomeneIGquiz']) && $_COOKIE['phenomeneIGquiz'] == false){
    
    
    $_COOKIE['phenomeneIGquiz'] = true;
    
    $phenomeneIGquiz  = true;

    
}