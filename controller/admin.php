<?php 
require('model/frontend.php');

function identification(){

require ('view/admin/identification.php');

}

function connect(){
    $id = dbAdminConnect(); 
  
    
    if (!empty($id)){
        $planetDB = getAllInfos("Planets"); 
        $iPDB = getAllInfos("PhenomesInfinimentPetit");
        $iGDB = getAllInfos("PhenomenesInfinimentGrand");
        $themes = [
            "Planets" => $planetDB,
            "PhenomesInfinimentPetit"=> $iPDB, 
            "PhenomenesInfinimentGrand" => $iGDB
        ]; 
        require('view/admin/interfaceAdmin.php'); 

    }else{
        
        identification(); 
    }






}

function modification($nomSujet, $nomTable){
    $sujetModified = modifTopic($nomSujet, $nomTable);
    require('view/admin/modification.php');
}
