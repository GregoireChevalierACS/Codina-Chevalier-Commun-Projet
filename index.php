<?php
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){
        if($_GET['action'] == 'launch'){
            launched();   
        } elseif($_GET['action'] == 'planets'){
            planets($_GET['name']);
        } elseif($_GET['action'] == 'infinimentGrand'){
            topics();
        } elseif($_GET['action'] == 'satellites'){
            satellites($_GET['name']);
        } elseif($_GET['action'] == 'infinimentPetit'){
            minisizeTopics();
        } elseif($_GET['action'] == 'particle'){
            particle($_GET['name']); 
        }
    }else{

        welcome();

    }

