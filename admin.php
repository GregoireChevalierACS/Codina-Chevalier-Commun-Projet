<?php

    require('controller/admin.php');
    
    if(isset($_GET['action'])){
        if($_GET['action'] === 'connect'){
            connect();
        }else if($_GET['action'] === 'modif'){
            modification($_GET['name'], $_GET['table']);
        }else if($_GET['action'] === 'modifiedTopic'){
           print_r($_POST);
        }
    } else{

        identification(); 
    }