<?php
require 'model/frontend.php';

function identification()
{

    require 'view/admin/identification.php';

}

function connect()
{

    if (isset($_GET['action']) && $_GET['action'] === 'connect') {
        $id = dbAdminConnect();
       
    } else {
        $id = null;
    }

    if (!empty($id)) {
        $_SESSION['authentifie'] = true;
        $_SESSION['user'] = $_POST['user'];
        header("Location: admin.php");
        exit();
    } else {
        identification();
        die();
    }

}

function logout()
{

    unset($_SESSION['authentifie']);
    header("Location: admin.php");
    exit();
}
// Fonction qui permet l'affichage de tous les sujets contenus dans la base de données et qui appelle la vue correspondante
function interfaceAdmin($suppr)
{

    $planetDB = getAllInfos("Planets");
    $iPDB = getAllInfos("PhenomesInfinimentPetit");
    $iGDB = getAllInfos("PhenomenesInfinimentGrand");
    $themes = [
        "Planets" => $planetDB,
        "PhenomesInfinimentPetit" => $iPDB,
        "PhenomenesInfinimentGrand" => $iGDB,
    ];
    $suppression = $suppr;
    require 'view/admin/interfaceAdmin.php';

}
// Fonction qui récupère les infos du sujet à modifié

function modification($id, $nomTable)
{
    $sujetModified = modifTopic($id, $nomTable);
    require 'view/admin/modification.php';
}
// Fonction qui permet l'envoi des données dans la base de donnée

function infosModifiees($tables)
{

    if ($tables == "Planets") {
        donneesModifieesPlanets();

    } elseif ($tables == "PhenomesInfinimentPetit") {
        donneesModifieesIP();
    } else if ($tables == "PhenomenesInfinimentGrand") {
        donneesModifieesIG();
    }
    header("Location: admin.php");
    exit();

}
// Fonction qui permet la récupération de structure de la base de donnée afin que dans la vue correspondante un formulaire soit généré automatiquement en fonction de la structure
function ajout($table){
    $columns = patternTable($table); 
    require('view/admin/ajout.php'); 
}
// Fonction qui permet d'ajouter un nouveau sujet à la base de donnée
function infosAjoutees($table){
    infosToAdd($table); 
    header("Location: admin.php");
     exit();
 
 
 }
// Fonction qui permet de confirmer la suppression
function confirm($id, $nomTable,$nameTopic){
    $idToDelete = $id;
    $tableToDelete = $nomTable;
    $nameOfTopic = $nameTopic;
    require('view/admin/suppression.php');
}
// Fonction qui permet la supression d'un sujet
function suppr($id, $nomTable){
    $sujetDeleted = supprTopic($id, $nomTable);
    $suppr = true;
    interfaceAdmin($suppr); 
    // header("Location: admin.php");
    // exit();
}

function profil(){
    $infosProfil = getInfosProfil();
    require('view/admin/profil.php'); 
}

function changePass(){
    updatePass();
}