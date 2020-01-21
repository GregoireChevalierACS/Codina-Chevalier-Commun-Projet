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

function getLastGoodResponse($id){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT reponse FROM reponsePossible WHERE id = ? ');
    $req-> execute(array($id)); 
    $goodResponse = $req -> fetch();
    return $goodResponse['reponse'] ;  
}


function dbAdminConnect(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM adminsUsers WHERE user = ? AND password = ?   '); 
    $req ->execute(array($_POST['user'], $_POST['password'])); 
    $id = $req -> fetchAll(); 
    return $id; 

}

function getInfosProfil(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM adminsUsers WHERE user = ? '); 
    $req ->execute(array($_SESSION['user'])); 
    $infos = $req -> fetchAll(); 
    return $infos; 
}

function updatePass(){
    $db = dbConnect(); 
    $req = $db->prepare('UPDATE adminsUsers SET password = ?   WHERE user = ? '); 
    $req ->execute(array($_POST['password'],$_SESSION['user'])); 
     }

function getAllInfos($theme){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT * FROM '.$theme); 
    $req ->execute(); 
    return $req -> fetchAll(); 
}

function modifTopic($id, $nomTable){
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM $nomTable WHERE id = ?"); 
    $req ->execute(array($id));
    return $req -> fetchAll(); 
}

function supprTopic($id, $nomTable){
    $db = dbConnect();
    $req = $db->prepare("DELETE FROM $nomTable WHERE id = ?"); 
    $req ->execute(array($id));
    return $req -> fetchAll(); 
}

function patternTable($table){
    $db = dbConnect(); 
    $req = $db->prepare("SHOW COLUMNS FROM $table"); 
    $req -> execute(); 
    return $req -> fetchAll();
}

function infosToAdd($table){
    $db = dbConnect(); 
    $columns = implode(",", array_keys($_POST['ajout'])); 
    $values = implode(",", array_map(function(){
        return "?";
    }, array_keys($_POST['ajout'] ))); 


    
    $req = $db->prepare("INSERT INTO $table ($columns) VALUES ($values)");
    $req -> execute(array_values($_POST['ajout'])); 
    


}



function donneesModifieesPlanets(){
 
    $db = dbConnect(); 

    $req = $db -> prepare("UPDATE Planets SET topicName = ?, distance_to_sun = ?, type = ?, orbital_period = ?, rotation_period = ?, temperature = ?, diameter = ?, mass = ?, gravity =?, composition = ?, satellites =?, fun_fact = ? , discovery_date = ?, visuel = ? WHERE id= ?");

    $req -> execute(array($_POST['topicName'],$_POST['distance_to_sun'],$_POST['type'],$_POST['orbital_period'],$_POST['rotation_period'],$_POST['temperature'],$_POST['diameter'],$_POST['mass'],$_POST['gravity'],$_POST['composition'],$_POST['satellites'],$_POST['fun_fact'],$_POST['discovery_date'],$_POST['visuel'],$_POST['idTopic']));

    }
   
function donneesModifieesIP(){
    $db = dbConnect(); 
    $req = $db -> prepare("UPDATE PhenomesInfinimentPetit SET topicName = ?, type = ?, typeSecondary = ?, description = ?, discovery_date = ?, visuel = ? WHERE id= ?");
    $req -> execute(array($_POST['topicName'],$_POST['type'],$_POST['typeSecondary'],$_POST['description'],$_POST['discovery_date'],$_POST['visuel'],$_POST['idTopic']));
}

function donneesModifieesIG(){
    $db = dbConnect(); 
    $req = $db -> prepare("UPDATE PhenomenesInfinimentGrand SET topicName = ?, subjectDescription = ?, history = ?, dimensions = ?, composition = ?, peopleRelatedTo = ?, visuel = ?, funFactEtLiens = ? WHERE id= ?");
    $req -> execute(array($_POST['topicName'],$_POST['subjectDescription'],$_POST['history'],$_POST['dimensions'],$_POST['composition'],$_POST['peopleRelatedTo'],$_POST['visuel'],$_POST['funFactEtLiens'],$_POST['idTopic']));
}
