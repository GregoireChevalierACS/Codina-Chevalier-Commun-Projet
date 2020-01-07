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

    $req = $db->prepare('SELECT * FROM Planets WHERE namePlanet = ?');
    $req->execute(array($namePlanet));
    $infos = $req->fetch();
    $arrayReturn = [$infos, $namePlanet];
    return $arrayReturn;
}

function getNamePlanets(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT namePlanet FROM Planets ORDER BY id');
    $req->execute();
    return $req ->fetchAll();
}


function getNamePhenomenons(){
    $db = dbConnect(); 
    $req = $db->prepare('SELECT nameOfTopic FROM PhenomenesInfinimentGrand ORDER BY id');
    $req->execute();
    return $req ->fetchAll();
}