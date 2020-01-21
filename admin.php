<?php
session_start();
require 'controller/admin.php';

if (empty($_SESSION['authentifie'])) {
    connect();

}


if (isset($_GET['action'])) {

    if ($_GET['action'] === 'modif') {
        modification($_GET['id'], $_GET['table']);
    } else if ($_GET['action'] === 'modifiedTopic') {
        infosModifiees($_POST['nameTable']);
    } elseif ($_GET['action'] === 'logout') {
        logout();
    } elseif($_GET['action'] =='ajout'){
        ajout($_GET['name']); 
    } elseif($_GET['action'] =='suppression'){
        suppr($_GET['id'], $_GET['table']); 
    } elseif($_GET['action'] == 'ajoute'){
        infosAjoutees($_GET['table']);
    } elseif($_GET['action'] == 'profil'){
        profil();
    }elseif($_GET['action'] == 'changePass'){
        changePass();
    }
} else {
    interfaceAdmin();
}
