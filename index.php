<?php
//Premier point d'entrée au site
session_start();
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){    
        // Si une action est définie, l'index va rediriger vers la fonction correspondante dans le controller
        if($_GET['action'] === 'launch'){
            launched();   
        } elseif($_GET['action'] === 'planets'){
            planets($_GET['name']);
        } elseif($_GET['action'] === 'menu'){
            menu();
        } elseif($_GET['action'] === 'infinimentGrand'){
            topics();
        } elseif($_GET['action'] === 'phenomeneIG'){
            phenomeneIG($_GET['name']);
        } elseif($_GET['action'] === 'lesGalaxies'){
            galaxies($_GET['name']);
        }  elseif($_GET['action'] === 'satellites'){
            satellites($_GET['name']);
        } elseif($_GET['action'] === 'infinimentPetit'){
            minisizeTopics();
        } elseif($_GET['action'] === 'particle'){
            particle($_GET['name']); 
        } elseif($_GET['action'] === 'response'){
            getNewQuizz();
        }elseif($_GET['action'] === 'tag'){
           tag();
        }
    }else{  
        // Sinon, l'index renverra vers la fonction welcome(); qui envoie la page d'accueil

        welcome();

    }

