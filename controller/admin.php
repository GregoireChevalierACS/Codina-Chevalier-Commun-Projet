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

function interfaceAdmin()
{

    $planetDB = getAllInfos("Planets");
    $iPDB = getAllInfos("PhenomesInfinimentPetit");
    $iGDB = getAllInfos("PhenomenesInfinimentGrand");
    $themes = [
        "Planets" => $planetDB,
        "PhenomesInfinimentPetit" => $iPDB,
        "PhenomenesInfinimentGrand" => $iGDB,
    ];
    require 'view/admin/interfaceAdmin.php';

}

function modification($id, $nomTable)
{
    $sujetModified = modifTopic($id, $nomTable);
    require 'view/admin/modification.php';
}

function infosModifiees($tables)
{

    if ($tables == "Planets") {
        donneesModifieesPlanets();

    } elseif ($tables == "PhenomesInfinimentPetit") {
        donneesModifieesIP();
    } else if ($tables == "PhenomenesInfinimentGrand") {
        donneesModifieesIG();
    }

}

function ajout($table){
    $columns = patternTable($table); 
    require('view/admin/ajout.php'); 


}

function infosAjoutees($table){
   infosToAdd($table); 
   header("Location: admin.php");
    exit();


}
