<?php
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){
        echo 'Test'; 
    }else{

        welcome();

    }

