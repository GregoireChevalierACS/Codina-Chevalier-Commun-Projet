<?php

    require('controller/admin.php');
    
    if(isset($_GET['action'])){
        if($_GET['action'] === 'connect'){
            connect();
        }
    } else{

        identification(); 
    }