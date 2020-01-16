<?php 
require('model/frontend.php');

function identification(){

require ('view/admin/identification.php');

}

function connect(){

   
    
    if (dbAdminConnect()){
        require('view/admin/interfaceAdmin.php'); 

    }else{

        identification(); 
    }






}
