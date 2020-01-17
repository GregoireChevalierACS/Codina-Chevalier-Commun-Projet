<?php

function dbConnect(){
   require('model/config.php');

   try
    {
        $db = new PDO('mysql:host=localhost;dbname=BDAG;charset=utf8',$dataBase['userName'], $dataBase['mdpDataBase']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getInfos($namePlanet){
	$db = dbConnect();

    $req = $db->prepare('SELECT * FROM Planets WHERE topicName = ?');
    $req->execute(array($namePlanet));
    $infos = $req->fetch();
    $arrayReturn = [$infos, $namePlanet];
    return $arrayReturn;
}

function getNamePlanets(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT topicName, visuel FROM Planets ORDER BY id');
    $req->execute();
    return $req ->fetchAll();
}
function getNamesSatellites($namePlanet){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT nameSatellite FROM satellites WHERE namePlanet = ? ORDER BY id');
    $req->execute(array($namePlanet));
    return $req ->fetchAll();
}


function getNamePhenomenons(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT topicName, visuel FROM PhenomenesInfinimentGrand ORDER BY id');
    $req->execute();
    return $req ->fetchAll();
}

function getInfosPhenomeneIG($namePhenomenonIG){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM PhenomenesInfinimentGrand WHERE topicName = ? ORDER BY id');
    $req->execute(array($namePhenomenonIG));
    return $req ->fetchAll();
}

function getNameGalaxies(){
    $db = dbConnect();
    $req = $db->prepare('SELECT nameOfGalaxy FROM Galaxies ORDER BY id');
    $req->execute();
    return $req ->fetchAll();
}

function getInfosGalaxies($nameGalaxie){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM Galaxies WHERE nameOfGalaxy = ? ORDER BY id');
    $req->execute(array($nameGalaxie));
    return $req ->fetchAll();
} 

function getInfosSatellite($nameSatellite){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM satellites WHERE nameSatellite = ? ORDER BY id');
    $req->execute(array($nameSatellite));
    return $req ->fetchAll();
} 
function getNamesMinisizeTopics(){ 
    $db = dbConnect(); 
    $req = $db->prepare('SELECT topicName, visuel FROM PhenomesInfinimentPetit ORDER BY id');
    $db = dbConnect(); 
    $req->execute();
    return $req ->fetchAll();
}

function getInfosParticle($nameParticle){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM PhenomesInfinimentPetit  WHERE topicName = ? ORDER BY id');
    $req->execute(array($nameParticle));
    return $req ->fetchAll();
}

function getQuestion($theme){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM question WHERE theme = ? ORDER BY id');
    $req->execute(array($theme));
    $questions =  $req ->fetchAll();
    $id = rand(0, (count($questions)-1)); 
    return $questions[$id];
}

function getResponse($id){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM reponsePossible WHERE idQuestion = ? ORDER BY id');
    $req->execute(array($id));
    return $req ->fetchAll();
}


function dbAdminConnect(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM adminsUsers WHERE user = ? AND password = ?   '); 
    $req ->execute(array($_POST['user'], $_POST['password'])); 
    $id = $req -> fetchAll(); 
    return $id; 

}

function getAllInfos($theme){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM '.$theme); 
    $req ->execute(); 
    return $req -> fetchAll(); 
}

function modifTopic($nomSujet, $nomTable){
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM $nomTable WHERE topicName = ?"); 
    $req ->execute(array($nomSujet));
    return $req -> fetchAll(); 
}

