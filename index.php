<?php
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){
        if($_GET['action'] == 'launch'){
            launched();   
        } elseif($_GET['action'] == 'planets'){
            planets($_GET['name']);
        } 
    }else{

        welcome();

    }

